<?php
session_start();
include("../Admin/conectarbd.php");


$id=$_GET['Item'];


     $sql = "call eliminarproducto('".$id."')";
       $insertar = mysql_query($sql, $conectar);
        echo mysql_error();
        if (mysql_error() == "") {
            echo "<script type='text/javascript'>alert('Registro Eliminado'); location.href='../verproducto.php'; </script>";
        }
        
?>