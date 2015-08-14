<?php


 require('header.php'); 
include("Admin/conectarbd.php");?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Reportes</a>
        </li>

    </ul>
</div>

<div class="row">
    <div class="box col">

                <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Reportes De Entradas</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="box-content">
            <form  method="post" action="Clases/GeneraPdf2.php">
                
<div class="controls input-group col-md-12">
                        <label for="exampleInputPassword1">Rol: </label>
                        <select id="selectError" data-rel="chosen" name="Usu">
                            <option value="0">Seleccione Una Opcion</option>
                            <?php 
                                                    $sql = "SELECT IdUsu, Nombre, Apellidos FROM usuarios ";
                                                    $consulta = mysql_query($sql, $conectar);
                                                    echo mysql_error();
                                                    if (mysql_num_rows($consulta) > 0) {
                                                        while ($registro = mysql_fetch_array($consulta)) {
                                                            
                                                            echo "<option value=" .$registro['IdUsu']. ">" . $registro['Nombre']." ".$registro['Apellidos'];
                                                        }
                                                    }

                            ?>
                        </select>
                    </div>                        <br>
                        
                        <button type="submit" class="btn btn-primary">Generar</button>
            
        </form>
                </div>
            </div>
        </div>
    </div>
    <!--/span-->

                <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Reportes De Salidas</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="box-content">
            <form  method="post" action="Clases/GeneraPdf3.php">
                                    <div class="controls input-group col-md-12">
                        <label for="exampleInputPassword1">Rol: </label>
                        <select id="selectError" data-rel="chosen" name="Usu">
                            <option value="0">Seleccione Una Opcion</option>
                            <?php 
                                                    $sql = "SELECT IdUsu, Nombre, Apellidos FROM usuarios ";
                                                    $consulta = mysql_query($sql, $conectar);
                                                    echo mysql_error();
                                                    if (mysql_num_rows($consulta) > 0) {
                                                        while ($registro = mysql_fetch_array($consulta)) {
                                                            
                                                            echo "<option value=" .$registro['IdUsu']. ">" . $registro['Nombre']." ".$registro['Apellidos'];
                                                        }
                                                    }

                            ?>
                        </select>
                    </div>
                        <br>
                        
                        <button type="submit" class="btn btn-primary">Generar</button>
            
        </form>
                </div>
            </div>
        </div>
    </div>


        </div>
    </div>
</div>


<?php require('footer.php'); ?>
			
