<?php


    include('./Conection/conection.php');

    if(!isset( $_POST['form-user'] )){
        
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            
            $result = mysqli_query($conection,"insert into user (nombre, apellido, correo, telefono) values('$nombre', '$apellido', '$correo', '$telefono')");
            

            if($result){
                echo "<script language='javascript'> 
                    alert('Un agente se estará comunicando con usted'); 
                    location.href='index.html';
                </script>";
                // header('Location:index.html');
            }else {
                echo "<script> alert('se mandaron datos'); </script>";
                header('Location:index.html');
            }
    }
