<!DOCTYPE html>
<html lang="en">
<head>
  <title>Facturación</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php /*session_start(); 

if($_SESSION){
if($_SESSION["tipo"]!="1") {
header("location:error.php");
}
}else{
header("location:error.php");
}
*/

?>

<div class="container">
  <div align="center">
  	<img src="img/logo.png" alt="Logo"/>
  <h2>Facturación</h2>
  </div>
  
   <div align="right"> 
  <table>
  <tr>
  	<td width="50px">
		<a href="menu_admin.php"><img src="img/menu.png" alt="menu"/></a>
		<a href="menu_admin.php"><p style="font-size:10px">Menu</p></a>
	</td>
    <td width="50px">
		<a href="logout.php"><img src="img/salir.png" alt="salir"/></a>
		<a href="logout.php"><p style="font-size:10px">Salir</p></a>
	</td>
 	</tr>
  </table>
  </div>
  
  <div class="panel panel-default">
    
	<div class="panel-heading" style="background-color:#2CB094">
	  <h4>Administrador:<?php /*echo $_SESSION["nombre"]." ".$_SESSION["apellido"]*/?></h4>
	</div>
    
	<div class="panel-body" align="center" style="width:500px; margin:auto">
	
	<h2>Agregar trayecto</h2>
	
	<?php
	/*$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "facturacion";*/
	
	$trayecto=$_POST['trayecto'];
	$valor=$_POST['valor'];
	
	include("conectar.php");
	$conn = conexion();
	/*
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
    ?>  <p> <img src="img/incorrecto.png" alt="No encontrado"/> Error en la conexion a la base de datos:</p>
		 <?php
   		 echo "Connection failed: " . mysqli_connect_error()?>
		 <br>
		 <a href="menu_admin.php" align class="btn btn-info" role="button">Volver al menu</a> <?php
		 die();
	}*/
	
	$sql = "INSERT INTO transportes (descripcion, valor)
	VALUES ('$trayecto', '$valor')";
	
	if (mysqli_query($conn, $sql)) {
  		 ?> <p>  <img src="img/correcto.png" alt="correcto"/>El trayecto fue creado satisfactoriamente</p><?php ;
		} else {
   		 ?>  <p> <img src="img/incorrecto.png" alt="No encontrado"/> Error creando el nuevo trayecto:</p> <?php echo mysqli_error($conn); ?> <br> <?php
		}

	mysqli_close($conn);
	
	
	?>
	            
				
    <a href="menu_admin.php" align class="btn btn-info" role="button">Volver al menu</a>
  
	</div>
	
  </div>
</div>
 
 
 
 


</body>
</html>
