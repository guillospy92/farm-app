<?php

require('mysql_table.php');

class PDF extends PDF_MySQL_Table {

    function Header() {
        //Title
       
        $this->SetFont('Arial', '', 18);
        $this->SetTextColor(255, 0, 0);
        $this->Cell(0, 6, 'Reporte  De Entradas', 0, 1, 'C');
        $this->Ln(10);
        //Ensure table header is output
        parent::Header();
    }

}

//Connect to database

mysql_connect('127.0.0.1', 'kmendoza0829', '');
mysql_select_db('u334911797_inven');
$Usuario = $_POST['Usu'];

/*
$date1 = date_create($fecha1);
$NFecha1 = date_format($date1, 'Y-m-d');
$date2 = date_create($fecha2);
$NFecha2 = date_format($date2, 'Y-m-d');*/
$pdf = new PDF();
$pdf->AddPage('L');
//First table: put all columns automatically
$prop = array('HeaderColor' => array(118, 216, 238),
    'color1' => array(191, 191, 191),
    'color2' => array(255, 255, 255),
    'padding' => 2);
$pdf->Table('SELECT usuarios.Nombre,usuarios.Apellidos, entradas.HoraEntrada, lotes.DescLote, productos.Descripcion FROM entradas INNER JOIN usuarios ON entradas.usuarios_IdUsu = usuarios.IdUsu INNER JOIN lotes ON entradas.IdLotes = lotes.IdLotes INNER JOIN lotes_has_productos ON lotes_has_productos.Lotes_IdLotes = lotes.IdLotes INNER JOIN productos ON lotes_has_productos.codigo = productos.codigo 
     WHERE usuarios.IdUsu='.$Usuario, $prop);
$pdf->Output();
?>