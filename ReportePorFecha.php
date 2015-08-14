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
            <form  method="post" action="Clases/GeneraPdf.php">
                
                  <div class="form-group">
                        <label for="exampleInputPassword1">Fecha Inicio</label>
                        <input type="date" class="form-control"  name="Fecha1" placeholder="inicio" />
                    </div>
            
             <div class="form-group">
                        <label for="exampleInputPassword1">Fecha Final</label>
                        <input type="date" class="form-control" name="Fecha2"  placeholder="final" />
                    </div>
                        <br>
                        
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
            <form  method="post" action="Clases/GeneraPdf1.php">
                
                  <div class="form-group">
                        <label for="exampleInputPassword1">Fecha Inicio</label>
                        <input type="date" class="form-control"  name="Fecha1" placeholder="inicio" />
                    </div>
            
             <div class="form-group">
                        <label for="exampleInputPassword1">Fecha Final</label>
                        <input type="date" class="form-control" name="Fecha2"  placeholder="final" />
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
			
