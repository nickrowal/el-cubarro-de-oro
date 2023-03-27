<?php
//para el pc personal
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectogrado";


$conn= mysqli_connect($servername,$username ,$password ,$dbname);
//$con = mysqli_connect('localhost','id19632625_usuario','$B?fqL0KFk#8@Nu/','id19632625_nombrebase');


if(!$conn){
	die("conexion fallo".mysqli_connect_error());

}else{
	//echo"holas";

}

?> 