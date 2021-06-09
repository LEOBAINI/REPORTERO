<?php
include "mysql.php";
session_start();



$codigos_conexion=$_POST['codigos_conexion'];
$ficheroPlantilla=$_POST['ficheroplantilla'];
$ficheroAEjecutar=$_POST['ficheroAejecutar'];
$max_cs_no=$_POST['max_cs_no'];


  $nombre=$_POST['nombre'];
  $descripcionreporte=$_POST['descripcionreporte'];
  $rutaAlQuery=$_POST['rutaAlQuery'];

  $rutaSalida=".\*\*Descargas\*\*";
  $rutaSalida=$rutaSalida.$_SESSION['pais'];
  $rutaSalida=str_replace('*', "", $rutaSalida);
  

  $usuarioSql= $_SESSION["sql_user"];//$_POST['usuarioSql'];
  $passwordSql=$_SESSION["sql_password"];//$_POST['passwordSql'];
  $basedata='monitordb';//$_POST['basedata'];
  $ip=$_SESSION["sql_server_ip"];//$_POST['ip'];

   $fecha = new DateTime();
   $timestamp= $fecha->getTimestamp();
   $nombre=$nombre.'_'.$timestamp;
   $rutaAlQuery=$rutaAlQuery.'_'.$timestamp.'.txt';
   $ficheroAEjecutar=$ficheroAEjecutar.'_'.$timestamp.'.txt';

encolarReporte($nombre,
  $descripcionreporte,
  $rutaAlQuery,
  $rutaSalida,
  $usuarioSql,
  $passwordSql,
  $basedata,
  $ip);

//Leemos la plantilla para luego reemplazar codigos de conexion
$Fichero= leer_fichero_completo($ficheroPlantilla);
//toma los codigos de conexión y los pone separados por coma y coimillas simples para sql
$CODIGOS_CONEXION_FORMATEADOS=formatearParametros($codigos_conexion,$max_cs_no);
//Reemplaza la cadena reservada en el txt por lo codigos de conexion
$nuevoFichero=str_replace('CODIGOS_CONEXION', $CODIGOS_CONEXION_FORMATEADOS, $Fichero);

//Escribe el fichero resultante para que java lo ejecute
escribir_fichero($nuevoFichero,$ficheroAEjecutar);

//llama al ejecutador java
execInBackground('.\start.bat');



function encolarReporte(
  $nombre,
  $descripcionreporte,
  $rutaAlQuery,
  $rutaSalida,
  $usuarioSql,
  $passwordSql,
  $basedata,
  $ip
  ){
  
  
  
  $query='insert into colareportes(nombre,
  descripcionreporte,
  rutaAlQuery,
  rutaSalida,
  usuarioSql,
  passwordSql,
  basedata,
  ip,
  fechaencolado)values("'.
   $nombre.'","'.
   $descripcionreporte.'","'.
   $rutaAlQuery.'","'.
   $rutaSalida.'","'.
   $usuarioSql.'","'.
   $passwordSql.'","'.
   $basedata.'","'.
   $ip.'",'.
   'NOW());'
  ;
  echo $query;
  $instanciaMysql=new miconexion();
  $instanciaMysql->insertar($query);




}

function leer_fichero_completo($nombre_fichero){
 
   $fichero_texto = fopen ($nombre_fichero, "r");   
   $contenido_fichero = fread($fichero_texto, filesize($nombre_fichero));
   return $contenido_fichero;
}

function escribir_fichero($contenido,$rutaFichero){
    $file = fopen($rutaFichero, "w");
    fputs($file, $contenido);
    fclose($file);
};



function formatearParametros($codigos_conexion,$max_cs_no){
  $parametros_seteados=null;
    $codigos_conexion_ar=explode("\n",$codigos_conexion);
  if(sizeof($codigos_conexion_ar)==1){
    $parametros_seteados="'".$codigos_conexion_ar[0]."'";
    return $parametros_seteados;
  }else{
    
for ($i = 0; $i < sizeof($codigos_conexion_ar) && $i < $max_cs_no; $i++) {
  
      if($i!=sizeof($codigos_conexion_ar)-1 && $i < $max_cs_no-1){
     $parametros_seteados=$parametros_seteados."'".rtrim($codigos_conexion_ar[$i])."',";
    }else{
      $parametros_seteados=$parametros_seteados."'".rtrim($codigos_conexion_ar[$i])."'"; 
    }

}
}


return $parametros_seteados;
}



function execInBackground($cmd) {
    if (substr(php_uname(), 0, 7) == "Windows"){
        pclose(popen("start /B ". $cmd, "r")); 
    }
    else {
        exec($cmd . " > /dev/null &");  
    }
    header("Location: principal.php");
    
}



?>