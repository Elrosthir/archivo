<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Aplic. UNED Cartagena</title>
<link href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="http://code.jquery.com/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<body> 
<?php
	$link = mysql_connect('localhost', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());

	mysql_select_db('uned') or die('No se pudo seleccionar la base de datos');
	@mysql_query('SET NAMES "utf8"');
?>

<div data-role="page">
	<div data-role="header">
		<h1>Psicología</h1>
        <a href="index.html" data-icon="back">Volver</a>
	</div>
	<div data-role="content">
		<ul data-role="listview">
			<li>Martes
            	<div data-role="collapsible">
                        	<h1>Curso 1</h1>
                        	<div class="ui-grid-a">
                              <div class="ui-block-a">Tema</div>
                        	  <div class="ui-block-b">Horas | Aulas</div>                            
                        	  <?php
								$query = 'SELECT * FROM tutorias WHERE curso="ps" AND dia="martes" AND ano=1';
								$result = mysql_query($query) or die('Consulta 	fallida: ' . mysql_error());	
								while ($line = mysql_fetch_array($result)){
									echo "<div class='ui-block-a'>".$line[3]."</div>";
									echo "<div class='ui-block-b'>".$line[4]." | ".$line[5]."</div>";
								}
							 ?>
                      	  </div>
                        </div>
            </li>
            <li>Miércoles
            	<div data-role="collapsible">
                        	<h1>Curso 1</h1>
                        	<div class="ui-grid-a">
                              <div class="ui-block-a">Tema</div>
                        	  <div class="ui-block-b">Horas | Aulas</div>
                        	  <?php
								$query = 'SELECT * FROM tutorias WHERE curso="ps" AND dia="miercoles" AND ano=1';
								$result = mysql_query($query) or die('Consulta 	fallida: ' . mysql_error());	
								while ($line = mysql_fetch_array($result)){
									echo "<div class='ui-block-a'>".$line[3]."</div>";
									echo "<div class='ui-block-b'>".$line[4]." | ".$line[5]."</div>";
								}
							  ?>
                      	  </div>
                        </div>
                        <div data-role="collapsible">
                        	<h1>Curso 2</h1>
                        	<div class="ui-grid-a">
                              <div class="ui-block-a">Tema</div>
                        	  <div class="ui-block-b">Horas | Aulas</div>
                        	  <?php
								$query = 'SELECT * FROM tutorias WHERE curso="ps" AND dia="miercoles" AND ano=2';
								$result = mysql_query($query) or die('Consulta 	fallida: ' . mysql_error());	
								while ($line = mysql_fetch_array($result)){
									echo "<div class='ui-block-a'>".$line[3]."</div>";
									echo "<div class='ui-block-b'>".$line[4]." | ".$line[5]."</div>";
								}
							  ?>
                      	  </div>
                        </div>
            </li>	
            <li>Jueves
            	<div data-role="collapsible">
                        	<h1>Curso 2</h1>
                        	<div class="ui-grid-a">
                              <div class="ui-block-a">Tema</div>
                        	  <div class="ui-block-b">Horas | Aulas</div>                            
                        	  <?php
								$query = 'SELECT * FROM tutorias WHERE curso="ps" AND dia="jueves" AND ano=2';
								$result = mysql_query($query) or die('Consulta 	fallida: ' . mysql_error());	
								while ($line = mysql_fetch_array($result)){
									echo "<div class='ui-block-a'>".$line[3]."</div>";
									echo "<div class='ui-block-b'>".$line[4]." | ".$line[5]."</div>";
								}
							   ?>
                      	  </div>
                        </div>
            </li>	
		</ul>
	</div>
	<div data-role="footer">
    	<h4>UNED Cartagena</h4>
	</div>
</div>
</body>
</html>
