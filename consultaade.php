<?php
include('http://192.168.1.200/uned/conex.php');

$dia=$_POST['dia'];
$query = "SELECT * FROM tutorias WHERE curso='ade' AND dia='$dia' ORDER BY ano";
$result = mysql_query($query) or die('Consulta 	fallida: ' . mysql_error());	

$arrDatos = array();
while ($rs=mysql_fetch_array($result))
{
        $arrDatos[] = array_map('utf8_encode', $rs);
}
echo json_encode($arrDatos);
@mysql_query('SET NAMES "utf8"');
?>  
