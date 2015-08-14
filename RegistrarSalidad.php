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
                <a href="#">Registro De Salida</a>
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
                <form method="POST" action="Clases/RegistrandoSalida.php">
                    <input type="hidden" name="CodigoProducto" value="<?php echo $Codigo; ?>">
                <?php
                 $sql = "call mostrarproductoentrada('".$Codigo."')";

            $consulta = mysql_query($sql, $conectar);
            echo mysql_error();
                if (mysql_num_rows($consulta) > 0) {
                    while ($registro = mysql_fetch_array($consulta)) {
                        ?>

                <div class="box-content">
                    <div class="row">
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputSuccess1">Codigo</label>
                    <input type="text" class="form-control" id="Item" name="Item" value="<?php echo $registro['codigo']?>" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputWarning1">Descripcion</label>
                    <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="<?php echo $registro['Descripcion']?>" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputError1">Categoria</label>
                    <input type="text" class="form-control" id="Categoria" name="Categoria" value="<?php echo $registro['Categoria']?>" disabled>
                </div>

                                <div class="form-group col-md-4">
                    <label class="control-label" for="inputSuccess1">Marca</label>
                    <input type="text" class="form-control" id="Marca" name="Marca" value="<?php echo $registro['Marca']?>" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputWarning1">Presentacion</label>
                    <input type="text" class="form-control" id="Presentacion" name="Presentacion" value="<?php echo $registro['Presentacion']?>" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputError1">Presentacion</label>
                    <input type="text" class="form-control" id="Presentacion2" name="Presentacion2" value="<?php echo $registro['Presentacion2']?>" disabled>
                </div>
                                <div class="form-group col-md-4">
                    <label class="control-label" for="inputSuccess1">Unidad De Medida</label>
                    <input type="text" class="form-control" id="Und_Medida" name="Und_Medida" value="<?php echo $registro['Und_Medida']?>" disabled>
                </div>
                                <div class="form-group col-md-4">
                    <label class="control-label" for="inputSuccess1">Cantidad En Stock</label>
                    <input type="text" class="form-control" id="Cantidad" name="Cantidad" value="<?php echo $registro['Cantidad']?>" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputWarning1">Provedor</label>
                    <input type="text" class="form-control" id="Provedor" name="Provedor" value="<?php echo $registro['NombreProvedor']?>" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputWarning1">Cantidad A Utilizar</label>
                    <input type="text" class="form-control" id="CantidadAUsar" name="CantidadAUsar" placeholder="Cantidad A Utilizar">
                </div>
                 <div class="form-group col-md-4">
                    <label class="control-label" for="inputWarning1">Ubicacion</label>
                    <input type="text" class="form-control" id="Estado" name="Estado" placeholder="Estado">
                </div>
                <div class="form-group col-md-4">
                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary">Confirmar Salida</button>
                    </p>
            <p class="center col-md-4">
               <a href="Principal.php"> <input type="button" value="Atras" class="btn btn-primary"></a>
                       
                    </p>
            </div>
                
<?php
}
}
?>
</form>
                    </div>
                </div>
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->

        <!--/span-->
    </div><!--/row-->






<?php require('footer.php'); ?>