<?php

//$mysqli->set_charset('utf8');

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bbva";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}


$nombre = $_POST["txtusuario"];
if (empty ($nombre)) {
	die('El campo es vacio');
}

$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE nombre = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: images.html");
}	

else if ($nr == 0) 
{
	header("Location: login.html");
	//echo "No ingreso"; 
}

else if ($nr >= 2) 
{
	echo "hay mas de un registro";
}



?> 