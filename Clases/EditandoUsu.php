<?php
session_start();
include("../Admin/conectarbd.php");

$sql = "call Actualizar_Usu('" . $_POST['Nombre'] . "','" . $_POST['Apellido'] . "','" . $_POST['Usuario'] . "',".$_SESSION['CodigoUsu'].")";

        $insertar = mysql_query($sql, $conectar);
        echo mysql_error();
        if (mysql_error() == "") {
            echo "<script type='text/javascript'>alert('Registro Modificado'); location.href='../VerUsuarios.php'; </script>";
        }


?>