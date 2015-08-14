<?php
session_start();
include("../Admin/conectarbd.php");




			$sql= "UPDATE productos 
			set
			 
		

        Descripcion='" . $_POST['Descripcion'] . "',
        Categoria='" . $_POST['Categoria'] . "',
        concentracion='" . $_POST['Concentracion'] . "',
		Forma_farmaceutica='" . $_POST['FormaFarmaceutica'] . "',
		 Fec_Vencimiento='" .$_POST['Fec_Vencimiento'] . "',
		  Reg_Invima='" . $_POST['Reg_Invima'] . "',
		   Temperatura='" . $_POST['Temperatura'] . "',
		    H_Relativo='" . $_POST['H_Relativo'] . "',
			 Marca='" . $_POST['Marca'] . "',
			  Presentacion='" . $_POST['Presentacion'] . "',
			   Presentacion2='" . $_POST['Presentacion2'] . "',
			    Und_Medida='" . $_POST['Und_Medida'] . "',
				Valor='" . $_POST['Valor'] . "',
				 Valor_Uni='" . $_POST['Valor_Uni'] . "',
				  Descuento='" . $_POST['Descuento'] . "',
				  
					  Costo_Prueba='" . $_POST['Costo_Prueba'] . "',
					   Repeticiones='" . $_POST['Repeticiones'] . "',
					    Cantidad='" . $_POST['Cantidad'] . "'
        WHERE Codigo=". $_POST['code'];



		        $insertar = mysql_query($sql, $conectar);
 echo mysql_error();
        if (mysql_error() == "") {
            echo "<script type='text/javascript'>alert('Actualizacion Exitosa'); location.href='../Principal.php'; </script>";
        }else{
        	echo "<script type='text/javascript'>alert('Ups, Error'); location.href='../Principal.php'; </script>";
        }
		

			
		
		
		
		
        



        
?>