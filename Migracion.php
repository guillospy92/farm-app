<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Migrar BD</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Migrar Bd</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content">
                <form role="form" name="importa" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">Seleccione Archivo De Excel</label>
                        <input type="file" id="excel" name='excel'/>
                        <input type="hidden" value="upload" name="action" />
                        <p class="help-block">Recuerde La Estructura De BD</p>
                    </div>
                    <button type="submit" class="btn btn-default" name="enviar">Importar</button>
                </form>

                <?php
    if(isset($_POST['enviar'])){
        $action=$_POST['action'];
    if ($action == "upload") {
        //cargamos el archivo al servidor con el mismo nombre
        //solo le agregue el sufijo bak_ 
        $archivo = $_FILES['excel']['name'];
        $tipo = $_FILES['excel']['type'];
        $destino = "bak_" . $archivo;
        if (copy($_FILES['excel']['tmp_name'], $destino)){
            echo "Archivo Cargado Con Éxito";
        }
        else{
            echo "Error Al Cargar el Archivo";
        }
        if (file_exists("bak_" . $archivo)) {
            /** Clases necesarias */
            require_once('Clases/PHPExcel.php');
            require_once('Clases/PHPExcel/Reader/Excel2007.php');
            // Cargando la hoja de cálculo
            $objReader = new PHPExcel_Reader_Excel2007();
            $objPHPExcel = $objReader->load("bak_" . $archivo);
            $objFecha = new PHPExcel_Shared_Date();
            // Asignar hoja de excel activa
            $objPHPExcel->setActiveSheetIndex(0);
            //conectamos con la base de datos 
            $cn = mysql_connect("localhost", "root", "") or die("ERROR EN LA CONEXION");
            $db = mysql_select_db("inventariofarmacia", $cn) or die("ERROR AL CONECTAR A LA BD");
            // Llenamos el arreglo con los datos  del archivo xlsx
            for ($i = 1; $i <= 10; $i++) {
                $_DATOS_EXCEL[$i]['item'] = $objPHPExcel->getActiveSheet()->getCell('A' . $i)->getCalculatedValue();

                $_DATOS_EXCEL[$i]['codigo'] = $objPHPExcel->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();

                $_DATOS_EXCEL[$i]['Descripcion'] = $objPHPExcel->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();

                $_DATOS_EXCEL[$i]['Categoria'] = $objPHPExcel->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Forma_farmaceutica'] = $objPHPExcel->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Concentracion'] = $objPHPExcel->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Lote'] = $objPHPExcel->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Fec_Vencimiento'] = $objPHPExcel->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();

                $_DATOS_EXCEL[$i]['Reg_Invima'] = $objPHPExcel->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Temperatura'] = $objPHPExcel->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['H_Relativo'] = $objPHPExcel->getActiveSheet()->getCell('K' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Empresa'] = $objPHPExcel->getActiveSheet()->getCell('L' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Marca'] = $objPHPExcel->getActiveSheet()->getCell('M' . $i)->getCalculatedValue();

                $_DATOS_EXCEL[$i]['Presentacion'] = $objPHPExcel->getActiveSheet()->getCell('N' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Presentacion2'] = $objPHPExcel->getActiveSheet()->getCell('O' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Und_Medida'] = $objPHPExcel->getActiveSheet()->getCell('P' . $i)->getCalculatedValue();

                $_DATOS_EXCEL[$i]['Valor'] = $objPHPExcel->getActiveSheet()->getCell('Q' . $i)->getCalculatedValue();

                $_DATOS_EXCEL[$i]['Valor_Uni'] = $objPHPExcel->getActiveSheet()->getCell('R' . $i)->getCalculatedValue();

                $_DATOS_EXCEL[$i]['Descuento'] = $objPHPExcel->getActiveSheet()->getCell('S' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Costo_Descuento'] = $objPHPExcel->getActiveSheet()->getCell('T' . $i)->getCalculatedValue();

                $_DATOS_EXCEL[$i]['Iva'] = $objPHPExcel->getActiveSheet()->getCell('U' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Dt_Blanco'] = $objPHPExcel->getActiveSheet()->getCell('W' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Dt_Cc_Normal'] = $objPHPExcel->getActiveSheet()->getCell('X' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Dt_Cc_Alto'] = $objPHPExcel->getActiveSheet()->getCell('Y' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Dt_Cc_Bajo'] = $objPHPExcel->getActiveSheet()->getCell('Z' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Pruebas_Realizadas'] = $objPHPExcel->getActiveSheet()->getCell('AA' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Pruebas_Cobradas'] = $objPHPExcel->getActiveSheet()->getCell('AB' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Costo_Prueba'] = $objPHPExcel->getActiveSheet()->getCell('AC' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Repeticiones'] = $objPHPExcel->getActiveSheet()->getCell('AD' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Cantidad'] = $objPHPExcel->getActiveSheet()->getCell('AE' . $i)->getCalculatedValue();
                
            }
        }
        //si por algo no cargo el archivo bak_ 
        else {
            echo "Necesitas primero importar el archivo";
        }
        $errores = 0;
        //recorremos el arreglo multidimensional 
        //para ir recuperando los datos obtenidos
        //del excel e ir insertandolos en la BD
        foreach ($_DATOS_EXCEL as $campo => $valor) {
            $sql = "INSERT INTO productos VALUES ('";
            foreach ($valor as $campo2 => $valor2) {
                $campo2 == "Cantidad" ? $sql.= $valor2 . "');" : $sql.= $valor2 . "','";
            echo '<br>';
            }
            echo $sql;
           $result = mysql_query($sql);
            if (!$result) {
                echo "Error al insertar registro " . $campo;
                $errores+=1;
            }
        }
        echo "<strong><center>ARCHIVO IMPORTADO CON EXITO, EN TOTAL $campo REGISTROS Y $errores ERRORES</center></strong>";
        //una vez terminado el proceso borramos el archivo que esta en el servidor el bak_
        unlink($destino);
    }
}
    ?>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<?php require('footer.php'); ?>
