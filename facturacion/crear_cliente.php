<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistema gestor de calificaciones</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php session_start(); 

if($_SESSION){
if($_SESSION["tipo"]!="1") {
header("location:error.php");
}
}else{
header("location:error.php");
}


?>

<div class="container">
  <div align="center">
  	<img src="img/calificaciones.png" alt="Logo"/>
  <h2>Sistema gestor de calificaciones</h2>
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
    
	<div class="panel-heading" style="background-color:#E1FF8B"><h4>Administrador:<?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]?></h4></div>
    
	<div class="panel-body" align="center">
	<h2>Agregar estudiante</h2>
	
  	<form class="form-horizontal" action="insertar_est.php" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="id">Identificacion:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="id" placeholder="Ingrese numero de identificacion">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="pri_ape">Primer apellido:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="pri_ape" placeholder="Ingrese primer apellido">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="seg_ape">Segundo apellido:</label> 
      <div class="col-sm-10">
        <input type="text" class="form-control" name="seg_ape" placeholder="Ingrese segundo apellido">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="nombre">Nombre:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre">
      </div>
    </div>
    
	<div class="form-group">
      <label class="control-label col-sm-2" for="correo">Correo:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="correo" placeholder="Ingrese correo">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
      <div class="col-sm-10">
	  <input type="password" class="form-control" name="pwd" placeholder="Ingrese contraseña">
	  </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="telefono">Telefono:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="telefono" placeholder="Ingrese telefono">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="grado">Grado:</label>
      <div class="col-sm-10">
        <select class="form-control" name="grado">
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
		<option>05</option>
		<option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
		<option>10</option>
		<option>11</option>
      </select>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="grupo">Grupo:</label>
      <div class="col-sm-10">
        <select class="form-control" name="grupo">
        <option>A</option>
        <option>B</option>
        <option>C</option>
        <option>D</option>
      </select>
      </div>
    </div>
		
    <button type="submit" class="btn btn-info">Guardar</button>
	 </form>
</div>  
	
	
	<div class="panel-footer"  align="center" style="background:#E1FF8B">
		<p>Programacion de sitios web</p>
		<p>Universidad nacional abierta y a distancia</p>
		<p>2017</p>
	</div>
  </div>
</div>
 
 
 
 


</body>
</html>
