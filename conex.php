<?php
	$link = mysql_connect('192.168.1.200', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());

	mysql_select_db('uned') or die('No se pudo seleccionar la base de datos');
	@mysql_query('SET NAMES "utf8"');
?>
