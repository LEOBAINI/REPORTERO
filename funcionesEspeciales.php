<?php 
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

$files = glob('Descargas/*'); //obtenemos todos los nombres de los ficheros
foreach($files as $file){
    if(is_file($file))
    $flag=unlink($file); //elimino el fichero

}
If ($flag) {
  echo '<script language="javascript">
    alert("La carpeta se vació correctamente");
    window.location.href="index.php"</script>';
} else {
  echo '<script language="javascript">
    alert("No se pudo borrar");
    window.location.href="index.php"</script>';
}



}
 ?>
