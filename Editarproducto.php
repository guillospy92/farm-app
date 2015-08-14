<?php
session_start();
require('header.php');
include("Admin/conectarbd.php");


 ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="Principal.php">Inicio</a>
        </li>
        <li>
            <a href="#">Nuevo Producto</a>
        </li>
    </ul>
</div>


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Actualizando Producto </h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
				

            </div>
            <div class="box-content">
                
                 <?php
                
              
               



          



                ?>
                <form role="form" action="Clases/Editandoproducto.php" method="POST">
                    
                       <?php
                       
                       
                        
                    
                  $sql = "SELECT * FROM productos where Item=" . $_GET["Item"];
                                                    $consulta = mysql_query($sql, $conectar);
                                                    echo mysql_error();
                                                    if (mysql_num_rows($consulta) > 0) {
                                                        while ($registro = mysql_fetch_array($consulta)) {

                    ?>
                 
				
				
				<div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Codigo</label>
                        <input type="text" class="form-control" id="item" name="item" placeholder=" Codigo" value="<?php echo $registro['codigo'];?>"  />
                    </div>

                	<div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder=" Descripcion" value="<?php echo $registro['Descripcion'];?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Categoria</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" placeholder=" Categoria" value="<?php echo $registro['Categoria'];?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Forma Farmaceutica</label>
                        <input type="text" class="form-control" id="forma" name="forma" placeholder=" Forma Farmaceutica" value="<?php echo $registro['Forma_farmaceutica'];?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Concentracion</label>
                        <input type="text" class="form-control" id="concentracion" name="concentracion" placeholder="concentracion" value="<?php echo $registro['concentracion'];?>">
                    </div>					
				<br>
				
				<div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Fecha De Vencimiento</label>
                        <input type="date" class="form-control" id="fecha" name="fecha"  placeholder="fecha vencimineto" value="<?php echo $registro['Fec_Vencimiento'];?>" />
                    </div>
                    


                    <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Reg_Invima</label>
                        <input type="text" class="form-control" id="invima" name="invima" placeholder="invima" value="<?php echo $registro['Reg_Invima'];?>" />
                    </div>
					
					                    
                    
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Temperatura</label>
                        <input type="text" class="form-control" id="temperatura" name="temperatura" placeholder=" temperatura" value="<?php echo $registro['Temperatura'];?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">H Relativo</label>
                        <input type="text" class="form-control" id="relativo" name="relativo" placeholder=" relativo" value="<?php echo $registro['H_Relativo'];?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca" placeholder="marca" value="<?php echo $registro['Marca'];?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Presentacion</label>
                        <input type="text" class="form-control" id="presentacion" name="presentacion" placeholder="presentacion" value="<?php echo $registro['Presentacion'];?>" />
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Presentacion 2</label>
                        <input type="text" class="form-control" id="presen" name="presen" placeholder=" presentacion 2" value="<?php echo $registro['Presentacion2'];?>">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Und Medida</label>
                        <input type="text" class="form-control" id="medida" name="medida" placeholder="medida" value="<?php echo $registro['Und_Medida'];?>" />
                    </div>
					
					 <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Valor</label>
                        <input type="text" class="form-control" id="valore" name="valore" placeholder="valore" value="<?php echo $registro['Valor'];?>">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Valor Unitario</label>
                        <input type="text" class="form-control" id="valor" name="valor" placeholder=" Valor Unitario" value="<?php echo $registro['Valor_Uni'];?>">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Descuento</label>
                        <input type="text" class="form-control" id="descuento" name="descuento" placeholder="descuento" value="<?php echo $registro['Descuento'];?>" />
                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Costo Prueba</label>
                        <input type="text" class="form-control" id="prueba" name="prueba" placeholder="prueba" value="<?php echo $registro['Costo_Prueba'];?>" />
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Repeteciones</label>
                        <input type="text" class="form-control" id="repeteciones" name="repeticiones" placeholder="repeteciones" value="<?php echo $registro['Repeticiones'];?>"  />
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Cantidad</label>
                        <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad" value="<?php echo $registro['Cantidad'];?>" />
                        <input type="hidden" class="form-control" id="cantidad" name="id" placeholder="id" value="<?php echo $registro['Item'];?>" >
                    </div>
                    
                    
                    <div class="controls input-group col-md-12">
                    	<label for="exampleInputPassword1">Proveedores: </label>
                        <select id="selectError" data-rel="chosen" name="provedor">
                            <option value="0">Seleccione Una Opcion</option>
                            <?php 
                                                    $sql = "call Listar_Provedores() ";
                                                    $consulta = mysql_query($sql, $conectar);
                                                    echo mysql_error();
                                                    if (mysql_num_rows($consulta) > 0) {
                                                        while ($registro = mysql_fetch_array($consulta)) {
                                                            
                                                            echo "<option value=" .$registro['IdProvedores']. ">" . $registro['NombreProvedor'];
                                                        }
                                                    }

                            ?>
                        </select>
                    </div>
                    <br>
                     <?php
                }
            }
            ?>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
				

            </div>
			
        </div>
    </div>
    <!--/span-->




<?php require('footer.php'); ?>

