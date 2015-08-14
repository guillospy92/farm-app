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
            <a href="#">Nuevo Usuario</a>
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
                <?php
                $Codigo=$_GET['IdUsu'];
                $_SESSION['CodigoUsu']=$Codigo;



                ?>
                <form role="form" action="Clases/EditandoUsu.php" method="POST">
                    <div class="form-group" >
                        <label for="exampleInputEmail1">Codigo</label>
                        <input type="text" class="form-control" id="codigo" name="codigo"  Value='<?php echo $Codigo; ?>' disabled>
                    </div>
                    <?php
                     $sql = "call listar_usuario_for_actualizar('".$Codigo."')";
                                                    $consulta = mysql_query($sql, $conectar);
                                                    echo mysql_error();
                                                    if (mysql_num_rows($consulta) > 0) {
                                                        while ($registro = mysql_fetch_array($consulta)) {

                    ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombres</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese Nombre" value="<?php echo $registro['Nombre'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellidos</label>
                        <input type="text" class="form-control" id="Apellido" name="Apellido" value="<?php echo $registro['Apellidos'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre De Usuario</label>
                        <input type="text" class="form-control" id="Usuario" name="Usuario" value="<?php echo $registro['Usuario'];?>">
                    </div>
                    <?php
                }
            }
            ?>


                    <br>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->




<?php require('footer.php'); ?>

