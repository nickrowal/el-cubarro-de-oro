<?php include 'cone.php';
	session_start();
	error_reporting(0);
	$usuario =$_SESSION['id'] ;
	
	$varsesion=$_SESSION['id'] ;
	if($varsesion==NULL || $varsesion==""){
	?>	
	<script type="text/javascript">
			window.alert('Pareces indeciso')
			window.location = "./";
		</script>
	<?php
		//echo "no estais autorizado perro";
		die();
	}
	
	
	if (isset($_SESSION['id'])) {
		
	}else{
		?>
		<script type="text/javascript">
			//window.location = "./";
		</script>
		<?php 
	}
	
		
//echo"----------------------------------------------";		    
//id_instrumento

$email =$_POST["email"];
$sugerencia=$_POST["sugerencia"];
$respuesta=$_POST["respuesta"];


        //nombres de los campos en las tablas;
$sql = "INSERT INTO buzonsugerencias (email,sugerencia,respuesta) VALUES ('$email','$sugerencia','$respuesta');";


if (mysqli_multi_query($con, $sql)) {
//echo "SE AÑADIERON NUEVOS DATOS A LA TABLA";
echo '<script>alert("los datos se enviaron al administrador  :)"); window.location="menuPrincipalUsuario.php"</script>';
} 
else {
//echo '<script>alert("Algo salio mal el Correo ingresado ya esta resitrado :("); window.location="inicio.php"</script>';
  echo "Error ALGO PASO: " . $sql . "<br>" . mysqli_error($conn);

}

mysqli_close($con);





?>  


