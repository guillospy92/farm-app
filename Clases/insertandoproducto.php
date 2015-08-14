<?php
session_start();
include("../Admin/conectarbd.php");

 $sql = "SELECT MAX(item) as codigoss FROM productos";
            $valor = mysql_fetch_array(mysql_query($sql, $conectar));
            echo mysql_error();
            $codigoss = $valor["codigoss"] + 1;
            
            


			$sql= "call Insertar_Producto(
			 
		'" . $codigoss . "',
		".$_POST['item'].",
        '" . $_POST['descripcion'] . "',
        '" . $_POST['categoria'] . "',
        '" . $_POST['concentracion'] . "',
		'" . $_POST['forma'] . "',
		 '" .$_POST['fecha'] . "',
		  '" . $_POST['invima'] . "',
		   '" . $_POST['temperatura'] . "',
		    '" . $_POST['relativo'] . "',
			 '" . $_POST['marca'] . "',
			  '" . $_POST['presentacion'] . "',
			   '" . $_POST['presen'] . "',
			    '" . $_POST['medida'] . "',
				'" . $_POST['valore'] . "',
				 '" . $_POST['valor'] . "',
				  '" . $_POST['descuento'] . "',
				   '',
				    '',
					 '',
					  '',
					   '',
					 '',
					  '" . $_POST['prueba'] . "',
					   '" . $_POST['repeticiones'] . "',
					    '" . $_POST['cantidad'] . "',
        '" . $_POST['provedor'] . "'
        )";

		        $insertar = mysql_query($sql, $conectar);
 echo mysql_error();
        if (mysql_error() == "") {
            echo "<script type='text/javascript'>alert('Registro Exitoso'); location.href='../Principal.php'; </script>";
        }else{
        	echo "<script type='text/javascript'>alert('Ups, Error'); location.href='../Principal.php'; </script>";
        }
		


			
		
		
		
		
        



        
?>



       