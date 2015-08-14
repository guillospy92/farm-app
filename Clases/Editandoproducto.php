<?php
session_start();
include("../Admin/conectarbd.php");

 
            
            


			$sql= "call editarproducto(
			 
		'" . $_POST['id'] . "',
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
				    '" . $_POST['blanco'] . "',
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
            echo "<script type='text/javascript'>alert('Registro Modificado'); location.href='../verproducto.php'; </script>";
        }

 
		


			
		
		
		
		
        



        
?>
