<?php

session_start();
include("Admin/conectarbd.php");


        //recogemos las variables post del formulario
        //recogemos las variables post del formulario
        $nombre = $_POST['usuario'];
        $password = $_POST['pass'];
        $sql= "select *
          FROM usuarios
where Usuario ='" . strip_tags($nombre) . "' and Pass ='" . strip_tags($password) . "'";

$consulta = mysql_query($sql, $conectar);
echo $sql;
            echo mysql_error();

            
        if ($reg = mysql_num_rows($consulta) == 0) {
            header("Location:index.php?usuario=no_existe");
        } else {
            
        
        if ($reg = mysql_fetch_array($consulta)) {
            
			
            $_SESSION['usCod'] = $reg['IdUsu'];
            $_SESSION['nick'] = $reg['Usuario'];
			$_SESSION['rol']= $reg['IdRol'];
			$_SESSION['apellido']=$reg['Apellidos'];
			$_SESSION['nombre']=$reg['Nombre'];
			
			
            header("Location:Principal.php");
        }
    }

 

?>
    