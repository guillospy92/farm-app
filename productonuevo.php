<?php require('header.php');
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
                <h2><i class="glyphicon glyphicon-edit"></i> Formulario De Creacion</h2>

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
                <form role="form" action="Clases/insertandoproducto.php" method="POST">
				
				
				<div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Codigo</label>
                        <input type="text" class="form-control" id="item" name="item" placeholder=" Codigo">
                    </div>

                	<div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder=" Descripcion">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Categoria</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" placeholder=" Categoria">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Forma Farmaceutica</label>
                        <input type="text" class="form-control" id="forma" name="forma" placeholder=" Forma Farmaceutica">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Concentracion</label>
                        <input type="text" class="form-control" id="concentracion" name="concentracion" placeholder="concentracion">
                    </div>					
				<br>
				
				<div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Fecha De Vencimiento</label>
                        <input type="date" class="form-control" id="fecha" name="fecha"  placeholder="fecha vencimineto">
                    </div>
                    


                    <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Reg_Invima</label>
                        <input type="text" class="form-control" id="invima" name="invima" placeholder="invima">
                    </div>
					
					                    
                    
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Temperatura</label>
                        <input type="text" class="form-control" id="temperatura" name="temperatura" placeholder=" temperatura">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">H Relativo</label>
                        <input type="text" class="form-control" id="relativo" name="relativo" placeholder=" relativo">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca" placeholder="marca">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Presentacion</label>
                        <input type="text" class="form-control" id="presentacion" name="presentacion" placeholder="presentacion">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Presentacion 2</label>
                        <input type="text" class="form-control" id="presen" name="presen" placeholder=" presentacion 2">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Und Medida</label>
                        <input type="text" class="form-control" id="medida" name="medida" placeholder="medida">
                    </div>
					
					 <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Valor</label>
                        <input type="text" class="form-control" id="valore" name="valore" placeholder="valore">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Valor Unitario</label>
                        <input type="text" class="form-control" id="valor" name="valor" placeholder=" Valor Unitario">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Descuento</label>
                        <input type="text" class="form-control" id="descuento" name="descuento" placeholder="descuento">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Costo Prueba</label>
                        <input type="text" class="form-control" id="prueba" name="prueba" placeholder="prueba">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Repeteciones</label>
                        <input type="text" class="form-control" id="repeteciones" name="repeticiones" placeholder="repeteciones">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Cantidad</label>
                        <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad">
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

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
				

            </div>
			
        </div>
    </div>
    <!--/span-->




<?php require('footer.php'); ?>

