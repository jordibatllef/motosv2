<?php

class Database{

    public static function connect($host='localhost',$user='root',$pwd='',$db='motos'){
        $con = new mysqli($host,$user,$pwd,$db);

        if($con == false){
            die('Error en la base de datos');

        }else{
            return $con;
        }
    }


}

