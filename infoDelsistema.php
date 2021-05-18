
<?php
//Función para verificar si existe o no una aplicacion esta corriendo
/**
* @param string $name Nombre del proceso que se verificara puede contener la extencón o no
*/
function verify_run_app($name){
    //Asigno a esta variable el nombre completo del proceso en caso de que no hayan pasado el $name con el .exe
    $full_name = (strpos(strtolower($name), '.exe') !== false) ? $name : $name.'.exe';
    //Listo las tareas en ejecución con el filtro donde el nombre de la imagen coincida con el nombre completo
    $proc = @popen('tasklist.exe /FI "IMAGENAME eq '.$full_name.'"',"r");
    //Inicializo la variable que contendra la salida de la ejecución de el proceso tasklist
    $content = '';
    //While no llegue al fin del archivo voy almacenando la salida del proceso
    while(!feof($proc)){
        $content .= fread($proc,1024);  
    }
    //Cierro el pipe
    pclose($proc);
    //Devuelvo true si el texto que devolvio no contiene el texto 'no hay tareas'
    return (strpos($content, 'no hay tareas') === false);
}
 





ini_set("display_errors",0);
$ip_host = "127.0.0.1";
$puerto = 9090;
 
$fp = fsockopen($ip_host,$puerto,$errno,$errstr,10);
if(!$fp){
echo "APLICACION DE REPORTES AGUARDANDO A SER EJECUTADA";
}else{
echo "APLICACION EJECUTANDO REPORTES AGUARDE...";

fclose($fp);
}
echo "<h6><a href='./colareportes.php'>LINK  a La Cola de Reportes</a></h6>";


 



/*

$esta_corriendo = verify_run_app("SQLCMD.exe");
if($esta_corriendo){       
    echo "LA APLICACION (SQLCMD) CORRIENDO";
} else {
    echo "LA APLICACION (SQLCMD) NO ESTA CORRIENDO";
}*/
 ?>