<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Sistema De Inventario Quimico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">

            <a class="navbar-brand" href="Principal.php"><!-- <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>-->
                <span>Sistema De Inventario</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"><?php  echo $_SESSION['nick']?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Perfil</a></li>
                    <li class="divider"></li>
                    <li><a href="cerarsession.php">Cerrar Sesion</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="ch-container">
    <div class="row">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <?php if($_SESSION['rol']==1){?>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Menu</li>
                        <li><a class="ajax-link" href="Principal.php"><i class="glyphicon glyphicon-home"></i><span> Principal</span></a>
                        </li>
                         <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-user"></i><span> Gestor De Usuario</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="NuevoUsuario.php"><i class="glyphicon glyphicon-plus"></i><span> Nuevo Usuario</span></a></li>
                                <li><a href="VerUsuarios.php"><i class="glyphicon glyphicon-pencil"></i><span> Ver Usuarios</span></a></li>
                                
                            </ul>
                            
                            <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus-sign"></i><span> Gestor De Producto</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="productonuevo.php"><i class="glyphicon glyphicon-plus"></i><span> Nuevo Producto</span></a></li>
                                <li><a href="verproducto.php"><i class="glyphicon glyphicon-plus"></i><span> Ver Producto</span></a></li>
                                
                                
                            </ul>
                        </li>
                                                    <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-user"></i><span> Reportes</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="ReportePorFecha.php"><i class="glyphicon glyphicon-plus"></i><span> Reporte Por Fecha</span></a></li>
                                <li><a href="ReportePorUsuario.php"><i class="glyphicon glyphicon-pencil"></i><span> Reporte Por Usuario</span></a></li>
                                
                            </ul>
                            
                                  <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus-sign"></i><span> Auditoria</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="auditoria.php"><i class="glyphicon glyphicon-plus"></i><span> Ver Auditoria</span></a></li>
                                
                                
                                
                            </ul>
                        </li>
                        </li>
                        <li><a class="ajax-link" href="Migracion.php"><i class="glyphicon glyphicon-download-alt"></i><span> Base De Datos</span></a>
                        </li>
                        </li>
                        
                        </li>
                    </ul>
                    <?php
}else{
    ?>
                       <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Menu</li>
                        <li><a class="ajax-link" href="Principal.php"><i class="glyphicon glyphicon-home"></i><span> Principal</span></a>
                        </li>
                            <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-user"></i><span> Gestor De Producto</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="productonuevo.php"><i class="glyphicon glyphicon-plus"></i><span> Nuevo Producto</span></a></li>
                                
                            </ul>
                        </li>
                          <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-user"></i><span> Reportes</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="ReportePorFecha.php"><i class="glyphicon glyphicon-plus"></i><span> Reporte Por Fecha</span></a></li>
                                
                                
                            </ul>
                        </li>
                    </ul>
                    <?php

}
                    ?>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <?php } ?>