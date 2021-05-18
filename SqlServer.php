
<?php
try{
session_start();
$sql_server_ip=$_POST['sql_server_ip'];
$sql_user=$_POST['sql_user'];
$sql_password=$_POST['sql_password'];
$sql_database=$_POST['sql_database'];
echo $sql_server_ip;


$serverName = $sql_server_ip."\\MSSQLSERVER, 1433"; //serverName\instanceName
$connectionInfo = array( "Database"=>$sql_database, "UID"=>$sql_user, "PWD"=>$sql_password);
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$error_sql=sqlsrv_errors()[0]['message'];



if( $conn ) {
     echo "Conexin establecida.<br />";
    
     $_SESSION["sql_user"]=$sql_user;
     $_SESSION["sql_password"]=$sql_password;
     $_SESSION["sql_server_ip"]=$sql_server_ip;
     sqlsrv_close( $conn );// Una vez validado y cargado las credenciales en variables de sesion, eliminar sesion de SQL server
     header("Location: principal.php");
}else{   
     
     echo '<script language="javascript">
     alert("'.$error_sql.'");
    window.location.href="index.php"</script>';
    throw new Exception('No se puede conectar, verifique conexion de red desde el servidor PHP hasta Master Mind');
    session_destroy();
    sqlsrv_close( $conn );

}
}catch(Exception $e){
     echo '<script language="javascript">  alert("'.$e->getMessage().'");
    window.location.href="index.php"</script>';
    session_destroy();
    sqlsrv_close( $conn );
}


?>