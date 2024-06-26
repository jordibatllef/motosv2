<?php

include_once 'config/database.php';
include_once 'usuario.php';

class UsuarioDao{

    //Función que devuelve todos los usuarios de la base de datos
    public static function getAllUsuarios(){

        $con = Database::connect();

        $stmt = $con->prepare("SELECT * FROM usuario");
        $stmt->execute();
        $result = $stmt->get_result();

        $listaUsuarios = [];

        while($usuario=$result->fetch_object('Usuario')){
            $listaUsuarios[] = $usuario;
        }
        $con->close();

        return $listaUsuarios;
    }

    //Función que obtiene el hash de la contraseña de un usuario por su email
    public static function getPasswordHash($email){
        $con = Database::connect();

        $stmt = $con->prepare("SELECT password FROM usuario WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        $row = $result->fetch_assoc();
        $passwordHash = $row['password'];

       $con->close();

       return $passwordHash;
    }

    //Función que devuelve un usuario de la base de datos por su mail
    public static function  getUserBymail($email){
        $con = Database::connect();

        $stmt = $con->prepare("SELECT * FROM usuario WHERE email=? ");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();

        $usuario = $result->fetch_object('usuario');
        $con->close();

        return $usuario;
    
    }

    //Función que añade un usuario de la base de datos
    public static function add( $nombre, $apellido, $email, $password_hash,$direccion,$rol){
   
        $con = Database::connect();
        echo $nombre;
        $stmt = $con->prepare("INSERT INTO usuario (nombre,apellido,email,password,direccion,rol) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssss" ,$nombre,$apellido,$email,$password_hash,$direccion,$rol);
        $stmt->execute();
       
        
        $con->close();
      
    }

    //Función que elimina un usuario de la base de datos
    public static function delete($idusuarios){
        $con = Database::connect();

        $stmt = $con->prepare("DELETE FROM usuario WHERE idusuarios=?");
        $stmt->bind_param("i" ,$idusuarios);
        $stmt->execute();

        $con->close();
    
    }

    //Función para conseguir usuario por su Id
    public static function getUserById($idUsuarios){
        $con=Database::connect();
        $stmt=$con->prepare("SELECT * FROM usuario WHERE idusuarios = ?");
        $stmt->bind_param("i",$idusuarios);
        $stmt->execute();
        $result = $stmt->get_result();

        $user = $result->fetch_object('usuario');
       
        $con->close();

        return $user;
    }

    // Función para editar un usuario
    public static function edit($id, $nombre, $apellido, $email, $password, $direccion){
       $con = Database::connect();

       // Verificar si se proporcionó un nuevo password
       if (!empty($password)) {
        // Si se proporcionó un nuevo password, encriptarlo
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Actualizar el password en la base de datos solo si se proporcionó un nuevo password
        $stmt = $con->prepare("UPDATE usuario SET nombre = ?,  apellido = ? , email = ?,  password = ?, direccion = ? WHERE idusuarios = ?");
        $stmt->bind_param("sssssi", $nombre, $apellido, $email, $password_hash, $direccion, $id);
       } else {
        // No se proporcionó un nuevo password, actualizar sin cambiar el password
        $stmt = $con->prepare("UPDATE usuario SET nombre = ?,  apellido = ? , email = ?, direccion = ? WHERE idusuarios = ?");
        $stmt->bind_param("ssssi", $nombre, $apellido, $email, $direccion, $id);
       }

       $stmt->execute();
       $con->close();
    }

    //Función para verificar si existe ya ese email en la BBDD 
    public static function emailExists($email){
        $con = Database::connect();
     
        $stmt = $con->prepare("SELECT count(*) as count FROM usuario WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
    
        $row = $result->fetch_assoc();
        $count = $row['count'];
    
        $con->close();
    
        return $count > 0; // Devuelve true si el correo electrónico existe, false de lo contrario
    }
    

 
    


}


