<?php
require_once "validaUsuario.php";
include "funcionesEspeciales.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>SICOFATEC</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">	
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="shortcut icon" href="images/logoProse.ico" />
</head>
<body>
	
	<div class="contenedor2">
	<div class="pais">
	
	 <?php
 	  mostrarPais($_SESSION["sql_server_ip"]);
 	 ?>	 	
 	</div>
		
	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  
	<ul class="nav nav-pills nav-fill">
 	 <li class="nav-item">
  	  <a class="nav-link " href="./principal.php">REPORTE DE TEST,PROBLEMAS DE SISTEMA Y ROBO</a>
  	</li>
 	 <li class="nav-item">
  	  <a class="nav-link active" href="#">DETALLE DE EVENTOS DE PROBLEMAS DE SISTEMA </a>
 	 </li>  	
 	  <li class="nav-item">
  	  <a class="nav-link " href="./salir.php">SALIR </a>
 	 </li>  	
	</ul>
	<button type="button" onclick="mostrarMensaje()">Info</button>
 	 
	
</nav>



	<div class="buscador">
	<form action="ejecutador.php" method="POST">
	 <!--Parametros de encolado en MySql local-->
	<input type="hidden" name="ficheroplantilla" value=".\QUERY_INPUTS\v_manto6_detalle.txt" />
    <input type="hidden" name="ficheroAejecutar" value=".\QUERY_INPUTS\v_manto6_detalle_formateado.txt" />	
    <input type="hidden" name="nombre" value="F_TECNICAS_DETALLE" />	
    <input type="hidden" name="descripcionreporte" value="DETALLE_DE_CANTIDAD_FALLAS_TECNICAS" />	
    <input type="hidden" name="rutaAlQuery" value=".\\QUERY_INPUTS\\v_manto6_detalle_formateado.txt" />	
    <input type="hidden" name="rutaSalida" value=".\\Descargas" />	
    <input type="hidden" name="usuarioSql" value="sa" />	
    <input type="hidden" name="passwordSql" value="QcTb2013.." />	
    <input type="hidden" name="basedata" value="monitordb" />	
    <input type="hidden" name="ip" value="10.57.0.18" />	

    <!--Parametros de encolado en MySql local-->


	<label for="codigos">Ingrese aquí los códigos de conexión uno debajo del otro (Max 100)</label>	
	
	<textarea name="codigos_conexion" rows="8" cols="90" required="required"></textarea>
	<input type="submit" name="Crear Reporte" value="Crear Reporte">
	</form>

	</div>
	

	
	
	<div class="reportesAdescargar" id="idreportesAdescargar">
		<h3>LISTANDO REPORTES GENERADOS...</h3>
		
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

	<script type="text/javascript">
		function mostrarMensaje(){
			alert('El resultado de esta consulta sale de la vista de Mastermind llamada "V_MANTO6_DETALLE" del pais correspondiente, a la que se le aplica el filtro de los códigos de conexión que se inserten en el campo de abajo.');
		}
	</script>


</body>
</html>