<?php require('header.php');
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
                <form role="form" action="Clases/CreandoUsu.php" method="POST">
                	<div class="form-group">
                        <label for="exampleInputEmail1">Nombres</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese Nombre">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellidos</label>
                        <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Ingrese Apellidos">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre De Usuario</label>
                        <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Ingrese Usuario">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="Pass" name="Pass" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirme Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirme Password">
                    </div>
                    <div class="controls input-group col-md-12">
                    	<label for="exampleInputPassword1">Rol: </label>
                        <select id="selectError" data-rel="chosen" name="Rol">
                            <option value="0">Seleccione Una Opcion</option>
                            <?php 
                                                    $sql = "call Roles()";
                                                    $consulta = mysql_query($sql, $conectar);
                                                    echo mysql_error();
                                                    if (mysql_num_rows($consulta) > 0) {
                                                        while ($registro = mysql_fetch_array($consulta)) {
                                                            
                                                            echo "<option value=" .$registro['IdRol']. ">" . $registro['Rol'];
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