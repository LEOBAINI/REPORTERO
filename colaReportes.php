<?php
require_once "validaUsuario.php";
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Cola de Reportes encolados sin finalizar</title>
</head>
<body>
<a href="./principal.php"><-- VOLVER <-- </a>

<?php
include "funcionesEspeciales.php"; 

$query="select
nombre, 
descripcionreporte,
RutaAlQuery,
rutasalida,
usuarioSql,
'***********' passwordSql,
basedata,
ip,
windowsProcessId,
EstaEnEjecucion,
fechaencolado,
fechafinalizado,
FechaHoraEjecucion
from colareportes
where fechafinalizado is null";

mostrarTabla($query);

	 

	
		

 ?>








</body>
</html>