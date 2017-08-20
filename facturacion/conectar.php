<?PHP
function conexion(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facturacion";
	
	// Create connection
	return mysqli_connect($servername, $username, $password, $dbname);
}

?>