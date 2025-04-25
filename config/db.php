<?php

class db{
       
     public static function conexion(){
        $mysqli=new mysqli('localhost', 'root', 'Ma13he052010', 'tasks');
        $mysqli->query("SET NAMES 'utf8'");

      if ($mysqli->connect_errno) {
        echo "Conexion fallida a Bd MySQL:" . $mysqli->connect_error;
        exit();
      }
        return $mysqli;
    }
}
?>
