<?php 

session_start();
// si no existe usuario, salir
if (!isset($_SESSION["sql_user"])) {
	 echo '<script language="javascript">
	 alert("No tienes permiso de de estar aqui, inicia sesion.");
	 window.location.href="index.php";
	 </script>';
	
	die();
}

 ?>