<!DOCTYPE html>
<html lang="en">
<head>
  <title>Facturacion</title>
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
    
	<div class="panel-heading" style="background-color:#2CB094"><h4>Administrador:<?php /* echo $_SESSION["nombre"]." ".$_SESSION["apellido"]*/?></h4></div>
    
	<div class="panel-body" align="center" style="width:400px; margin:auto" >
	<h2>Agregar dias festivos </h2>
	
	<?php
	$numero=$_POST['numero'];
	?>
  	
	<form class="form-horizontal" action="insertar_est.php" role="form" method="POST">
  	
		<?php for ($i = 1; $i <= $numero; $i++) { ?>
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="nombre">Fecha:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" name="<?php echo "nombre".$i ?> ">
      </div>
	</div>
	<?php } ?>

			
    	
    <button type="submit" class="btn btn-warning">Continuar</button>
	 </form>
</div>  
	

  </div>
</div>
 
</body>
</html>
