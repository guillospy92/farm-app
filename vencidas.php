<?php
 require('header.php'); 
include("Admin/conectarbd.php");?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="Principal.php">Home</a>
        </li>
        <li>
            <a href="#">Vencidas</a>
        </li>

    </ul>
</div>

<div class="row">
    <div class="box col">

        <div class="box-inner">
            <a href="header.php"></a>
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Productos Vencidos</h2>

                <div class="box-icon">

                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>

                </div>
            </div>
                        <div class="box-content">
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Codigo</th>
        <th>Descripcion</th>
        
      <th>Dias Para Vencer</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>

        <?php 
        $hoy = date("Y-m-d");
            $sql = "call Vencidos";
                    
            $consulta = mysql_query($sql, $conectar);
            echo mysql_error();
                if (mysql_num_rows($consulta) > 0) {
                    while ($registro = mysql_fetch_array($consulta)) {
                        if($registro['DiffDate']<0){
                            echo "<tr><td>".$registro['codigo']."</td><td class='center'>".$registro['descripcion']."</td><td class='center'>".$registro['DiffDate']."</td><td> <a class='btn btn-success' href='VerProducto.php?Codigo=".$registro['codigo']."'>
                                                     <i class='glyphicon glyphicon-zoom-in icon-white'></i>
                                                        Ver
                                                     </a>
                                                     <a class='btn btn-info' href='RegistrarSalidad.php?Codigo=".$registro['codigo']."'>
                <i class='glyphicon glyphicon-arrow-right icon-white'></i>
                Salida
            </a>
            <a class='btn btn-danger' href='RegistrarEntrada.php?Codigo=".$registro['codigo']."'>
                <i class='glyphicon glyphicon-arrow-left icon-white'></i>
                Entrada
            </a>";
                                                            
                                                        }

                                                        }
                                                    }

                            ?>

</tbody>
</table>

            </div>


        </div>
    </div>
</div>


<?php require('footer.php'); ?>