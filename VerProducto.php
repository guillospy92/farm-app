<?php require('header.php'); 
include("Admin/conectarbd.php");

$Codigo=$_GET['Codigo'];

?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="Principal.php">Inicio</a>
            </li>
            <li>
                <a href="#">Ver Producto</a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-eye-open"></i> Producto <?php echo $Codigo; ?> </h2>

                    <div class="box-icon">
               
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                    
                    </div>
                </div>
                <?php
                $sql = "SELECT productos.*, provedores.NombreProvedor
                    FROM productos
                    INNER JOIN provedores ON productos.idprovedores = provedores.idprovedores
                    WHERE productos.codigo='".$Codigo."'";

            $consulta = mysql_query($sql, $conectar);
            echo mysql_error();
                if (mysql_num_rows($consulta) > 0) {
                    while ($registro = mysql_fetch_array($consulta)) {
                        ?>


             <form action="Clases/ActualizandoUsu.php" method="POST">           
                        <input type="hidden" class="form-control" id="code" name="code" value="<?php echo $Codigo ?>">
                <div class="box-content">
                    <div class="row">
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputSuccess1">Item</label>
                    <input type="text" class="form-control" id="Item" name="Item" value="<?php echo $registro['Item']?>">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputWarning1">Descripcion</label>
                    <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="<?php echo $registro['Descripcion']?>">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputError1">Categoria</label>
                    <input type="text" class="form-control" id="Categoria" name="Categoria" value="<?php echo $registro['Categoria']?>">
                </div>
                                <div class="form-group col-md-4">
                    <label class="control-label" for="inputSuccess1">Forma Farmaceutica</label>
                    <input type="text" class="form-control" id="FormaFarmaceutica" name="FormaFarmaceutica" value="<?php echo $registro['Forma_farmaceutica']?>">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputWarning1">Concentracion</label>
                    <input type="text" class="form-control" id="Concentracion" name="Concentracion" value="<?php echo $registro['concentracion']?>">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputError1">Fecha De Vencimiento</label>
                    <input type="text" class="form-control" id="Fec_Vencimiento" name="Fec_Vencimiento" value="<?php echo $registro['Fec_Vencimiento']?>">
                </div>
                                <div class="form-group col-md-4">
                    <label class="control-label" for="inputSuccess1">Registro Invima</label>
                    <input type="text" class="form-control" id="Reg_Invima" name="Reg_Invima" value="<?php echo $registro['Reg_Invima']?>">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputWarning1">Temperatura</label>
                    <input type="text" class="form-control" id="Temperatura" name="Temperatura" value="<?php echo $registro['Temperatura']?>">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputError1">H Relativo</label>
                    <input type="text" class="form-control" id="H_Relativo" name="H_Relativo" value="<?php echo $registro['H_Relativo']?>">
                </div>
                                <div class="form-group col-md-4">
                    <label class="control-label" for="inputSuccess1">Marca</label>
                    <input type="text" class="form-control" id="Marca" name="Marca" value="<?php echo $registro['Marca']?>">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputWarning1">Presentacion</label>
                    <input type="text" class="form-control" id="Presentacion" name="Presentacion" value="<?php echo $registro['Presentacion']?>">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputError1">Presentacion</label>
                    <input type="text" class="form-control" id="Presentacion2" name="Presentacion2" value="<?php echo $registro['Presentacion2']?>">
                </div>
                                <div class="form-group col-md-4">
                    <label class="control-label" for="inputSuccess1">Unidad De Medida</label>
                    <input type="text" class="form-control" id="Und_Medida" name="Und_Medida" value="<?php echo $registro['Und_Medida']?>">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputWarning1">Valor</label>
                    <input type="text" class="form-control" id="Valor" name="Valor" value="<?php echo $registro['Valor']?>">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputError1">Valor Unitario</label>
                    <input type="text" class="form-control" id="Valor_Uni" name="Valor_Uni" value="<?php echo $registro['Valor_Uni']?>">
                </div>
                                <div class="form-group col-md-4">
                    <label class="control-label" for="inputSuccess1">Descuento</label>
                    <input type="text" class="form-control" id="Descuento" name="Descuento" value="<?php echo $registro['Descuento']?>">
                </div>

                <div class="form-group col-md-4">
                    <label class="control-label" for="inputWarning1">Costo Prueba</label>
                    <input type="text" class="form-control" id="Costo_Prueba" name="Costo_Prueba" value="<?php echo $registro['Costo_Prueba']?>">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputError1">Repeticiones</label>
                    <input type="text" class="form-control" id="Repeticiones" name="Repeticiones" value="<?php echo $registro['Repeticiones']?>">
                </div>
                                <div class="form-group col-md-4">
                    <label class="control-label" for="inputSuccess1">Cantidad</label>
                    <input type="text" class="form-control" id="Cantidad" name="Cantidad" value="<?php echo $registro['Cantidad']?>">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputWarning1">Provedor</label>
                    <input type="text" class="form-control" id="Provedor" name="Provedor" value="<?php echo $registro['NombreProvedor']?>">
                </div>
  <p class="center col-md-4">

                        <button type="submit" class="btn btn-primary"><i class='glyphicon glyphicon-arrow-right icon-white'></i> Actualizar</button>
                    </p>
                </form>
                
<?php
}
}
?>
                    </div>
                </div>
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->

        <!--/span-->
    </div><!--/row-->






<?php require('footer.php'); ?>