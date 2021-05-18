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
	
	<div class="contenedor">
	<div class="pais">
	
	 <?php
 	  mostrarPais($_SESSION["sql_server_ip"]);
 	 ?>	 	
 	</div>
	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  
	<ul class="nav nav-pills nav-fill">
 	 <li class="nav-item">
  	  <a class="nav-link active" href="#">REPORTE DE TEST,PROBLEMAS DE SISTEMA Y ROBO</a>
  	</li>
 	 <li class="nav-item">
  	  <a class="nav-link" href="./detalle.php">DETALLE DE EVENTOS DE PROBLEMAS DE SISTEMA </a>
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
	<input type="hidden" name="ficheroplantilla" value=".\QUERY_INPUTS\v_manto6.txt" />
    <input type="hidden" name="ficheroAejecutar" value=".\QUERY_INPUTS\v_manto6_formateado.txt" />	
    <?php
    echo '<input type="hidden" name="nombre" value="F_TECNICAS_'.$_SESSION['pais'].'"/>' 	
    ?>
    <input type="hidden" name="descripcionreporte" value="CANTIDAD_FALLAS_TECNICAS" />	
    <input type="hidden" name="rutaAlQuery" value=".\\QUERY_INPUTS\\v_manto6_formateado.txt" />	
   
    <!--Parametros de encolado en MySql local-->




	<label for="codigos_conexion">Ingrese aquí los códigos de conexión uno debajo del otro (Max 5000)</label>	

	<textarea name="codigos_conexion" rows="8" cols="90" required="required"></textarea>
	<!--<input type="button" value="Solicitar Reporte" onclick="location.href = 'ejecutador.php'">-->
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
			alert('El resultado de esta consulta sale de la vista de Mastermind llamada "v_manto6" del pais correspondiente, a la que se le aplica el filtro de los códigos de conexión que se inserten en el campo de abajo.');
		}
	</script>


</body>
</html>