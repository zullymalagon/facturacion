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

<?php /* session_start(); 

if($_SESSION){
if($_SESSION["tipo"]!="2") {
header("location:error.php");
}
}else{
header("location:error.php");
}
*/
?>

<div class="container">
  <div align="center"><img src="img/logo.png" alt="Logo"/>
    <h2>Facturación</h2>
  </div>
  
    <div align="right"> 
  <table>
  <tr>
  	<td width="50px">
		<a href="menu_docente.php"><img src="img/menu.png" alt="menu"/></a>
		<a href="menu_docente.php"><p style="font-size:10px">Menu</p></a>
	</td>
    <td width="50px">
		<a href="logout.php"><img src="img/salir.png" alt="salir"/></a>
		<a href="logout.php"><p style="font-size:10px">Salir</p></a>
	</td>
 	</tr>
  </table>
  </div>
  
  <div class="panel panel-default">
    
	<div class="panel-heading" style="background-color:#2CB094"><h4>Docente:<?php /* echo $_SESSION["nombre"]." ".$_SESSION["apellido"] */ ?></h4></div>
    
	<div class="panel-body" align="center">
	<h2>Agregar cliente</h2>
	
  	<form class="form-inline" action="insertar_cliente.php" role="form" method="POST">
   	
	 
	<div class="form-group">
      <label  for="tipo_id">Tipo de identificación:</label>
      <div class="form-group">
        <select class="form-control" name="tipo_id" >
          <option>Cedula de ciudadania</option>
          <option>Nit</option>
        </select>
      </div>
    </div>
	&nbsp&nbsp&nbsp
	<div class="form-group">
      <label for="id">Numero de identificación:</label>
      <div class="form-group">
        <input type="text" class="form-control" name="id">
      </div>
    </div>
	
	<br><br>
	<div class="form-group">
      <label for="nombre">Nombre:</label>
      <div class="form-group">
        <input type="text" class="form-control" name="nombre">
      </div>
    </div>
	&nbsp&nbsp&nbsp
	<div class="form-group">
      <label for="apellido">Apellido:</label>
      <div class="form-group">
        <input type="text" class="form-control" name="apellido"  style="width:250px">
      </div>
    </div>
	&nbsp&nbsp&nbsp
	<div class="form-group">
      <label for="empresa">Empresa:</label>
      <div class="form-group">
        <input type="text" class="form-control" name="empresa">
      </div>
    </div>
	
<br>
	<br>
	<div class="form-group">
      <label for="telefono">Telefono:</label>
      <div class="form-group">
        <input type="text" class="form-control" name="telefono">
      </div>
    </div>
	&nbsp&nbsp&nbsp
	<div class="form-group">
      <label for="tel_alt">Telefono alterno:</label>
      <div class="form-group">
        <input type="text" class="form-control" name="tel_alt" >
      </div>
    </div>
	&nbsp&nbsp&nbsp
	<div class="form-group">
      <label for="direccion">Dirección:</label>
      <div class="form-group">
        <input type="text" class="form-control" name="direccion">
      </div>
    </div>
	
	<br><br>
	
	<div class="form-group">
      <label  for="observaciones">Observaciones:</label>
	  <div class="form-group">
	    <textarea class="form-control" rows="3" name="observaciones" style="width:500px"></textarea>
	  </div>
    </div>
	


	<br>
	<br>
    <button type="submit" class="btn btn-warning">Guardar</button>
	 </form>
</div>  
	

  </div>
</div>
 
 
 
 


</body>
</html>
