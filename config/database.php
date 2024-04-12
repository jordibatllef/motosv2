<?php

/*class Database{

    public static function connect($host='sql108.infinityfree.com',$user='if0_35811990',$pwd='7MXrwTbJwk',$db='if0_35811990_jordimotos'){
        $con = new mysqli($host,$user,$pwd,$db);

        if($con == false){
            die('Error en la base de datos');

        }else{
            return $con;
        }
    }


}*/


class Database{

    public static function connect($host='localhost',$user='root',$pwd='',$db='motosjb'){
        $con = new mysqli($host,$user,$pwd,$db);

        if($con == false){
            die('Error en la base de datos');

        }else{
            return $con;
        }
    }


}
