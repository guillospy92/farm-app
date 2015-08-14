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
        <th>Fecha</th>
        <th>Hora</th>
        <th>Usuario</th>
        <th>Tabla</th>
        <th>Accion</th>
        <th>Nombre</th>
    </tr>
    </thead>
    <tbody>
        <?php 
            $sql = "call mostrarauditoria()";
            $consulta = mysql_query($sql, $conectar);
            echo mysql_error();
                if (mysql_num_rows($consulta) > 0) {
                    while ($registro = mysql_fetch_array($consulta)) {
                            echo "<tr><td>".$registro['fecha']."</td><td class='center'>".$registro['hora']."</td><td class='center'>".$registro['usuario']."</td><td class='center'>".$registro['tabla']."  </td><td class='center'>".$registro['accion']." </td><td class='center'>".$registro['nombre']." </td>
                                                        
                                                     
                                                    
           
            
                
                
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

