<?php 
session_start();

include "funcionesEspeciales.php";
obtener_estructura_directorios(".\descargas\\".$_SESSION['pais']);

 ?>