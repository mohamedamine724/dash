<!DOCTYPE html>
<html lang="es">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>S'ha produït un error inesperat...</h2>
  <a class="btn btn-primary" href="../index.php" role="button">Tornar al Inici<a>
  
  <!--- CODI PHP -->
  <?php
  $data = "";
  
  $data = $_POST['data'];
  
	if(isset($data))
	{
		shell_exec("taskkill /F /IM python.exe /T");
		$salida = shell_exec("Dash04.py $data");
		echo "<h3>Creant Dashboard del consum amb data --> $data</h3>";
	}


  ?>
  
  
</div>


</body>
</html>
