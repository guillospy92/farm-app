<?php
session_start();
include("../Admin/conectarbd.php");




 $sql = "SELECT MAX(IdUsu) as codigo FROM usuarios";
            $valor = mysql_fetch_array(mysql_query($sql, $conectar));
            echo mysql_error();
            $codigo = $valor["codigo"] + 1;
            
            
        $consulta="call reg_usu (" . $codigo . ",
        '" . $_POST['Nombre'] . "',
        '" . $_POST['Apellido'] . "',
        '" . $_POST['Rol'] . "',
        '" . $_POST['Pass'] . "',
        '" . $_POST['Usuario'] . "' )";
       
        $resp=  mysql_query($consulta,$conectar);
            


  
        echo mysql_error();
        if (mysql_error() == "") {
            echo "<script type='text/javascript'>alert('Registro Exitoso'); location.href='../NuevoUsuario.php'; </script>";
        }
?>