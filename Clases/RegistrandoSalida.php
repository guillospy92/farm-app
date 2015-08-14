<?php
session_start();
include("../Admin/conectarbd.php");

$hoy = date("Y-m-d");

$Hora = date("H:i:s");

 $sql="SELECT Cantidad FROM productos WHERE codigo='".$_POST['CodigoProducto']."'";
            $Cant = mysql_fetch_array(mysql_query($sql, $conectar));
            echo mysql_error();
            $Canti = $Cant["Cantidad"];


        if($_POST['CantidadAUsar']>$Canti){
            echo 'usara mas de lo que hay';
        }else{         


 $sql = "SELECT MAX(IdSalida) as codigo FROM salidas";
            $valor = mysql_fetch_array(mysql_query($sql, $conectar));
            echo mysql_error();
            $codigo = $valor["codigo"] + 1;

$sql = "call registrarsalida(
        ".$codigo.",
        '" . $_SESSION['usCod'] . "',
        '" . $hoy. "',
        '" . $Hora . "',
        '" . $_POST['CantidadAUsar']. "',
        '" . $_POST['CodigoProducto'] . "',
        '" . $_POST['Estado'] . "'
        )";
        $insertar = mysql_query($sql, $conectar);


        echo mysql_error();
        if (mysql_error() == "") {
            $NuevaCantidad =$Canti-$_POST['CantidadAUsar'];
            
            $sql="call editarproductosalida(
                
              	".$_POST['CodigoProducto'].",
                	" .$NuevaCantidad. "
		            
                
                
                ) ";

        $insertar = mysql_query($sql, $conectar);

        echo "<script type='text/javascript'>alert('Salida Exitosa!'); location.href='../Principal.php'; </script>";
        
        }
        

    }
?>