<!DOCTYPE html>
<html>
<head>
	<title>Reporte MANTO 6</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	
	<div class="contenedor">
	<div class="buscador">
	<form action="" method="POST">
	<label for="codigos">Ingrese aquí los códigos de conexión uno debajo del otro</label>	
	<textarea name="codigos" rows="10" cols="180" ></textarea>
	<input type="submit" value="Solicitar Reporte">
	</form>
	</div>
	

	<label for="borrarReportes">Listado de reportes descargados</label>
	
	<div class="reportesAdescargar" id="idreportesAdescargar">
		<h3>Descarga de Reportes</h3>
		
	</div>

	<div class="infoSistema" id="idinfoDelsistema">
	Info Sistema: 	
		
	</div>
	<div id="borrarReportes">
		<input type="button" name="borrarReportes" value="Borrar descargas" onclick="location.href = 'vaciarDescargas.php'">
	</div>
</div>

	
	

	<script type="text/javascript">
	$(document).ready(function(){
	setInterval(
	function(){
	$('#idinfoDelsistema').load('infoDelsistema.php');
	},2000
	);
	});
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
	setInterval(
	function(){
	$('#idreportesAdescargar').load('descargas.php');
	},2000
	);
	});
	</script>


</body>
</html>