<?php 
 require('header.php'); 
include("Admin/conectarbd.php");

$Codigo=$_GET['Codigo'];

?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="Principal.php">Inicio</a>
            </li>
            <li>
                <a href="#">Registro De Entrada</a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-eye-open"></i> Producto  </h2>

                    <div class="box-icon">
               
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                    
                    </div>
                </div>
                <form method="POST" action="RegistrarEntrada.php?Codigo=<?php echo $Codigo; ?>">
                    <input type="hidden" name="CodigoProducto" value="<?php echo $Codigo; ?>">
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
                    <label class="control-label" for="inputWarning1">¿Lote Existente?: </label>
                <label class="radio-inline">
                    <input type="radio" name="Lote" id="Lote" value="Si"> Si
                </label>
                <label class="radio-inline">
                    <input type="radio" name="Lote" id="Lote" value="No"> No
                </label>
            </div>
                            <div class="form-group col-md-4">
                    <label class="control-label" for="inputWarning1">Fecha De Vencimiento</label>
                    <input type="date" class="form-control" id="Vencimiento" name="Vencimiento" >
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputWarning1">Nueva Cantidad</label>
                    <input type="text" class="form-control" id="NuevaCantidad" name="NuevaCantidad" required>
                </div>
                <div class="form-group col-md-4">
                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary" name="confirmar">Confirmar Entrada</button>
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
    </div>
<?php
if(isset($_POST['confirmar'])){
    if ($_POST['Lote']=='Si') {
        echo '<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-eye-open"></i> Seleccione Lote  </h2>

                    <div class="box-icon">
               
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>';
               echo '<form method="POST" action="Clases/RegistrandoEntrada.php">';
                echo '<div class="box-content">
                    <div class="row">';
                    echo '<input type="hidden" name="CodigoProducto1" value="'.$_POST['CodigoProducto'].'">';
                    echo '<input type="hidden" name="NuevaCantidad1" value="'.$_POST['NuevaCantidad'].'">';
                    echo '<input type="hidden" name="Vencimiento1" value="'.$_POST['Vencimiento'].'">';
                    echo '<input type="hidden" name="Lote1" value="'.$_POST['Lote'].'">';
                    


              echo'  <div class="form-group col-md-4">
                    <label for="exampleInputPassword1">Rol: </label>
                        <select id="selectError" data-rel="chosen" name="LoteEsc">
                            <option value="0">Seleccione Una Opcion</option>';
                           
                                                    $sql = "SELECT IdLotes, DescLote FROM lotes ";
                                                    $consulta = mysql_query($sql, $conectar);
                                                    echo mysql_error();
                                                    if (mysql_num_rows($consulta) > 0) {
                                                        while ($registro = mysql_fetch_array($consulta)) {
                                                            
                                                            echo "<option value=" .$registro['IdLotes']. ">" . $registro['DescLote'];
                                                        }
                                                    }

                            
                       echo' </select>
                        <button type="submit" class="btn btn-primary" name="confirmar">Asignar</button>
                    
            </div>


</form>
</div>
                </div>
                </div>';


}else{
    echo '<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-eye-open"></i> Nuevo Lote  </h2>

                    <div class="box-icon">
               
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>';
               echo '<form method="POST" action="Clases/RegistrandoEntrada.php">';
                echo '<div class="box-content">
                    <div class="row">';
                    echo '<input type="hidden" name="CodigoProducto1" value="'.$_POST['CodigoProducto'].'">';
                    echo '<input type="hidden" name="NuevaCantidad1" value="'.$_POST['NuevaCantidad'].'">';
                    echo '<input type="hidden" name="Vencimiento1" value="'.$_POST['Vencimiento'].'">';
                    echo '<input type="hidden" name="Lote1" value="'.$_POST['Lote'].'">';
                    


              echo'  <div class="form-group col-md-4">
                    <label class="control-label" for="inputSuccess1">Codigo Del Lote A Crear:</label>
                    <input type="text" class="form-control" id="NuevoLote" name="NuevoLote">
                        <button type="submit" class="btn btn-primary" name="confirmar">Crear Y Asignar</button>
                    
            </div>


</form>
</div>
                </div>
                </div>';

}//fin del else
}// fin del isset
?>
                    
            
        <!--/row-->

        <!--/span-->
    <!--/row-->






<?php require('footer.php'); ?>