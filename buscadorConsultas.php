<!DOCTYPE html>
<html>
<head>
	<title>pepe</title>
</head>
<body>
<input type="text" name="filtro">
<input type="submit" name="buscar">
<input type="button" class="btn btn-info" name="ejecutar" value="Ejecutar" onclick="window.location.href='ejecutador.php'">
<br>
<?php 
/*
for ($i=0;$i<100;$i++){
	echo "Consulta Query nro ".$i."<br>";
}*/

include "funcionesEspeciales.php";
obtener_estructura_directorios(".\QUERY_INPUTS");


 ?>
</body>
</html>
