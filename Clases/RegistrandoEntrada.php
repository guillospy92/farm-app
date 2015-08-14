<?php
session_start();
include("../Admin/conectarbd.php");


if ($_POST['Lote1']=='Si'){
    $sql1 = "INSERT INTO lotes_has_productos
        VALUES(
        ".$_POST['LoteEsc'].",
        '" . $_POST['CodigoProducto1'] . "'
        )";
//ojo descomentarias
      $insertar = mysql_query($sql1, $conectar);
       echo mysql_error();
 $sql = "SELECT MAX(IdEntrada) as codigo FROM entradas";
            $valor = mysql_fetch_array(mysql_query($sql, $conectar));
            echo mysql_error();
            $codigoentrada = $valor["codigo"] + 1;
$hoy = date("Y-m-d");

$Hora = date("H:i:s");

 $sql3 = "call reg_entrada(
        ".$codigoentrada.",
        '".$hoy."',
        '".$Hora."',
        " . $_POST['LoteEsc'] . ",
        ".$_SESSION['usCod']."
        )";


       $insertar = mysql_query($sql3, $conectar);
        echo mysql_error();
$sql="SELECT Cantidad FROM productos WHERE codigo='".$_POST['CodigoProducto1']."'";
            $Cant = mysql_fetch_array(mysql_query($sql, $conectar));
            echo mysql_error();
            $Canti = $Cant["Cantidad"];

if($_POST['Vencimiento1']==''){

    if($_POST['NuevaCantidad1']==''){

    }else{
        $NuevaCanti=$Canti+$_POST['NuevaCantidad1'];

         $sql = "UPDATE productos SET Cantidad=".$NuevaCanti." WHERE codigo='".$_POST['CodigoProducto1']."'";

        $insertar = mysql_query($sql, $conectar);
    }
}else{
    $sql = "UPDATE productos SET Fec_Vencimiento='".$_POST['Vencimiento1']."' WHERE codigo='".$_POST['CodigoProducto1']."'";

        $insertar = mysql_query($sql, $conectar);
  if($_POST['NuevaCantidad1']==''){

    }else{
        $NuevaCanti=$Canti+$_POST['NuevaCantidad1'];
         $sql = "UPDATE productos SET Cantidad=".$NuevaCanti." WHERE codigo='".$_POST['CodigoProducto1']."'";

        $insertar = mysql_query($sql, $conectar);
    }
}

echo mysql_error();
        if (mysql_error() == "") {
            echo "<script type='text/javascript'>alert('Lote, Entrada Y Actualizacion Exitosa'); location.href='../Principal.php'; </script>";
        }
    

}else{


 $sql = "SELECT MAX(IdLotes) as codigo FROM Lotes";
            $valor = mysql_fetch_array(mysql_query($sql, $conectar));
            echo mysql_error();
            $codigolote = $valor["codigo"] + 1;


            $sql = "INSERT INTO Lotes
        VALUES(
        ".$codigolote.",
        '" . $_POST['NuevoLote'] . "'
        )";


       $insertar = mysql_query($sql, $conectar);
        echo mysql_error();


$sql1 = "INSERT INTO lotes_has_productos
        VALUES(
        ".$codigolote.",
        '" . $_POST['CodigoProducto1'] . "'
        )";
//ojo descomentarias
       $insertar = mysql_query($sql1, $conectar);
        echo mysql_error();

 $sql = "SELECT MAX(IdEntrada) as codigo FROM Entradas";
            $valor = mysql_fetch_array(mysql_query($sql, $conectar));
            echo mysql_error();
            $codigoentrada = $valor["codigo"] + 1;

$hoy = date("Y-m-d");

$Hora = date("H:i:s");

 $sql3 = "INSERT INTO Entradas
        VALUES(
        ".$codigoentrada.",
        '".$hoy."',
        '".$Hora."',
        " . $codigolote . ",
        ".$_SESSION['usCod']."
        )";


       $insertar = mysql_query($sql3, $conectar);
        echo mysql_error();
         $sql="SELECT Cantidad FROM productos WHERE codigo='".$_POST['CodigoProducto1']."'";
            $Cant = mysql_fetch_array(mysql_query($sql, $conectar));
            echo mysql_error();
            $Canti = $Cant["Cantidad"];


if($_POST['Vencimiento1']==''){

    if($_POST['NuevaCantidad1']==''){

    }else{
        $NuevaCanti=$Canti+$_POST['NuevaCantidad1'];

         $sql = "UPDATE productos SET Cantidad=".$NuevaCanti." WHERE codigo='".$_POST['CodigoProducto1']."'";

        $insertar = mysql_query($sql, $conectar);
    }
}else{
    $sql = "UPDATE productos SET Fec_Vencimiento='".$_POST['Vencimiento1']."'' WHERE codigo='".$_POST['CodigoProducto1']."'";

        $insertar = mysql_query($sql, $conectar);
  if($_POST['NuevaCantidad1']==''){

    }else{
        $NuevaCanti=$Canti+$_POST['NuevaCantidad1'];
         $sql = "UPDATE productos SET Cantidad=".$NuevaCanti." WHERE codigo='".$_POST['CodigoProducto1']."'";

        $insertar = mysql_query($sql, $conectar);
    }
}

echo mysql_error();
        if (mysql_error() == "") {
            echo "<script type='text/javascript'>alert('Lote, Entrada Y Actualizacion Exitosa'); location.href='../Principal.php'; </script>";
        }

}//fin else si o no
/*

$hoy = date("Y-m-d");

$Hora = date("H:i:s");

 $sql="SELECT Cantidad FROM productos WHERE codigo='".$_POST['CodigoProducto']."'";
            $Cant = mysql_fetch_array(mysql_query($sql, $conectar));
            echo mysql_error();
            $Canti = $Cant["Cantidad"];


        if($_POST['CantidadAUsar']>$Canti){
            echo 'usara mas de lo que hay';
        }else{         


 $sql = "SELECT MAX(IdSalida) as codigo FROM Salidas";
            $valor = mysql_fetch_array(mysql_query($sql, $conectar));
            echo mysql_error();
            $codigo = $valor["codigo"] + 1;

$sql = "INSERT INTO Salidas
        VALUES(
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
            $sql = "UPDATE productos SET Cantidad=".$NuevaCantidad." WHERE codigo='".$_POST['CodigoProducto']."'";

        $insertar = mysql_query($sql, $conectar);

        echo "<script type='text/javascript'>alert('Salida Exitosa!'); location.href='../Principal.php'; </script>";
        
        }
        

    }*/
?>