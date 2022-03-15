<?php


    include('./Conection/conection.php');
    
    date_default_timezone_set('America/Lima');

    if(!isset( $_POST['form-user'] )){
        
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $created_at = date("Y-m-d H:i:s");
            $ip = $_SERVER['REMOTE_ADDR'];

            $result = mysqli_query($conection,"insert into leeds (nombre, apellido, correo, telefono, created_at, ip) values('$nombre', '$apellido', '$correo', '$telefono', '$created_at', '$ip')");
            
            echo $result;

            echo 'Holis';
    }
