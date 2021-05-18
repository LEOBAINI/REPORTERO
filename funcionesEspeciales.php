<?php 
include "mysql.php";

date_default_timezone_set('America/Argentina/Buenos_Aires');
function obtener_estructura_directorios($ruta){
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)){
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        echo "<ul>";

        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false)  {
                
            $ruta_completa = $ruta . "/" . $archivo;

            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != "..") {
                // Si es un directorio se recorre recursivamente
                if (is_dir($ruta_completa)) {
                    echo "<li>" . $archivo . "</li>";
                    obtener_estructura_directorios($ruta_completa);
                } else {
                  // echo "<li>" . $archivo . "</li>";
                    echo "<li><a href='".$ruta_completa."' download='".$archivo."'>". $archivo ."</a>  ".(filesize($ruta_completa)/1048576)." MegaBytes, Fecha de ultima modificacion ".date ("F d Y H:i:s.", filemtime($ruta_completa))."</li>"; 

                   
                   
                }
            }
        }
        
        // Cierra el gestor de directorios
        closedir($gestor);
        echo "</ul>";
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }
}
function vaciarDescargas(){
session_start();
$files = glob('Descargas/'.$_SESSION['pais'].'/*'); //obtenemos todos los nombres de los ficheros
foreach($files as $file){
    if(is_file($file))
    $flag=unlink($file); //elimino el fichero

}
If ($flag) {
  echo '<script language="javascript">
    alert("La carpeta se vació correctamente");
    window.location.href="principal.php"</script>';
} else {
  echo '<script language="javascript">
    alert("No se pudo borrar");
    window.location.href="principal.php"</script>';
}



}

function mostrarTabla($query){

$instanciaMysql=new miconexion();
$resultSet=$instanciaMysql->dameResultSet($query);
        
        $cantCampos=0;
        $fieldinfo = $resultSet -> fetch_fields();
        echo "<table class='table table-striped'><tr>";
        foreach ($fieldinfo as $val) {
        echo    "<th>".$val -> name."</th>";
         $cantCampos++; 
        } 
         echo "</tr>";

        
        
        while ($lista=$resultSet->fetch_row()) {
            echo "<tr>";
            for ($i = 0; $i < $cantCampos; $i++) {
            echo "<td>".$lista[$i]."</td>";
            }       
            echo "</tr>";
            
        }
             echo "</table>";
             echo "</div>";

}
//$_SESSION["sql_server_ip"]
function mostrarPais($ip_server){
  //  echo (strcmp($ip_server, "10.58.118.60") == 0);
   $arg01='10.54.118.60';
   $arg02='10.54.248.240';
   $arg03='10.54.248.82';
   $ch01='10.56.130.91';
   $ch02='10.56.144.43';
   $co01='10.57.0.18';
   $co02='10.57.0.20';
   $pe01='10.51.0.142';
   $pe02='10.51.132.167';
   $pe03='10.51.132.132';
   $uy01='10.59.0.100';
   $uy02='10.59.0.101';
   $py01='10.58.110.30';
   $py02='10.58.110.31';

    if(strcmp($ip_server, $arg01) == 0 or
       strcmp($ip_server, $arg02) == 0 or
       strcmp($ip_server, $arg03) == 0 ){
       setearVariableSessionPais('ARGENTINA');

    }
    if(strcmp($ip_server, $ch01) == 0 or
       strcmp($ip_server, $ch02) == 0  ){
     setearVariableSessionPais('CHILE');
    }
    if(strcmp($ip_server, $co01) == 0 or
       strcmp($ip_server, $co02) == 0 ){
       setearVariableSessionPais('COLOMBIA');
    }
    if(strcmp($ip_server, $pe01) == 0 or
       strcmp($ip_server, $pe02) == 0 or
       strcmp($ip_server, $pe03) == 0
     ){
       setearVariableSessionPais('PERU');
    }
    if(strcmp($ip_server, $uy01) == 0 or
       strcmp($ip_server, $uy02) == 0 ){
       setearVariableSessionPais('URUGUAY');
    }
    if(strcmp($ip_server, $py01) == 0 or
       strcmp($ip_server, $py02) == 0 ){
       setearVariableSessionPais('PARAGUAY');
    }
    


}
function setearVariableSessionPais($pais){
        $_SESSION['pais']=$pais;
        echo "INFO DE SESION : PAIS: ".$_SESSION['pais']." - SERVER ".$_SESSION['sql_server_ip']." USUARIO: ".$_SESSION["sql_user"];

}


 ?>