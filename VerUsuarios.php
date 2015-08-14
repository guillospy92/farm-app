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
                <h2><i class="glyphicon glyphicon-edit"></i> Usuarios</h2>

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
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Rol</th>
        <th>Nombre De Usuario</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
        <?php 
            $sql = "call Listar_Usuarios()";
            $consulta = mysql_query($sql, $conectar);
            echo mysql_error();
                if (mysql_num_rows($consulta) > 0) {
                    while ($registro = mysql_fetch_array($consulta)) {
                            echo "<tr><td>".$registro['IdUsu']."</td><td class='center'>".$registro['Nombre']."</td><td class='center'>".$registro['Apellidos']."</td><td class='center'>".$registro['Rol']."</td><td class='center'>".$registro['usuario']."</td><td> <a class='btn btn-success' href='#'>
                                                     <i class='glyphicon glyphicon-zoom-in icon-white'></i>
                                                        Ver
                                                     </a>
                                                     <a class='btn btn-info' href='EditarUsuario.php?IdUsu=".$registro['IdUsu']."'>
                <i class='glyphicon glyphicon-edit icon-white'></i>
                Editar
            </a>
            <a class='btn btn-danger' href='Clases/EliminarUsu.php?IdUsu=".$registro['IdUsu']."'>
                <i class='glyphicon glyphicon-trash icon-white'></i>
                Eliminar
            </a>";
                                                            
                                                        }
                                                    }

                            ?>
 
</tbody>
</table>

            </div>
        </div>
    </div>
    <!--/span-->




<?php require('footer.php'); ?>

