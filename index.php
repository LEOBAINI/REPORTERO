<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="shortcut icon" href="images/logoProse.ico" />

<title>Login</title>
</head>
 
<body>

<div id="container">


<h2>Bienvenido</h2>
<h2>Sistema SICOFATEC</h2>
<div class="login-form">
    <form action="SqlServer.php" method="post">
        <h2 class="text-center">LOGIN</h2>   
        <input type="hidden" name="sql_database" value="monitordb" />    
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="sql_user" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="sql_password" required="required">
           
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <P>SELECCIONE PAÍS</p>
        <select name="sql_server_ip">
		<option value="10.54.118.60">ARGENTINA</option>
		<option value="10.56.130.91">CHILE</option>
		<option value="10.59.0.101">URUGUAY</option>
		<option value="10.58.110.30">PARAGUAY</option>
		<option value="10.57.0.18">COLOMBIA</option>
		<option value="10.51.132.132">PERU</option>		
		</select>

                  
    </form>
    
</div>
<h6>Sistema de Consulta de Fallo Técnico</h6>

</div>
<script>
  function mostrarContrasena(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }


</script>
</body>

</html>
