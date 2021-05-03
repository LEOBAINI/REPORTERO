<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

	<title>ReporteroPrueba</title>
</head>
<body>
<div class="contenedor">
	<div class="menu">
		<h2 >*REPORTERO1* SISTEMA DE REPORTES DE MASTERMIND </h2>
	</div>
	<div class="consultasrecientes">
		<h3>Listado de consultas recientes</h3>
		 <?php 
		require_once "recientes.php"; 
  		?>   
	</div>

	<div class="buscador">
		<h3>Buscador Consultas</h3>
		<?php 
		require_once "buscadorConsultas.php"; 
  		?>  
	</div>
	<div class="reportesAdescargar" id="idreportesAdescargar">
		<h3>Descarga de Reportes</h3>
		
	</div>
	<div class="infoSistema" id="idinfoDelsistema">
		Info Sistema: 
		
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
	setInterval(
	function(){
	$('#idreportesAdescargar').load('descargas.php');
	},2000
	);
	});
	</script>

<script type="text/javascript">
	$(document).ready(function(){
	setInterval(
	function(){
	$('#idinfoDelsistema').load('infoDelsistema.php');
	},2000
	);
	});
	</script>

</body>
</html>