<?php
$conectar = mysql_connect("127.0.0.1","kmendoza0829","");
if(!$conectar){
    echo "Conexion NO exitosa";
    echo mysql_error();
}
mysql_select_db("u334911797_inven",$conectar);
?>