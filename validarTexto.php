<?php include 'cone.php';
	session_start();
	error_reporting(0);
	$usuario =$_SESSION['id'] ;
	
	$varsesion=$_SESSION['id'] ;
	if($varsesion==NULL || $varsesion==""){
	?>	
	<script type="text/javascript">
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
	$id = $_SESSION['id'];
	$consulta = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$id';");
	$valores = mysqli_fetch_array($consulta);
	$nombre = $valores['nombre'];
	$email = $valores['email'];
	$foto = $valores['foto'];
	 ?>

<?php 

$usuario =$_SESSION['id'] ;
//echo $usuario;
	include "cone.php";

		$idTextos =$_POST["idTextos"];
		$texto =$_POST["texto"];
		


$sql= "UPDATE textos set texto='$texto'where idTextos='$idTextos' ";
if (mysqli_multi_query($con, $sql)) {
    
       echo '<script>alert("Cambio de datos exitoso "); window.location="menuPrincipal.php"</script>';
    
    }
	
else {
echo '<script>alert("Error algo paso el texto es invalido"); window.location="menuPrincipal.php"</script>';
  //echo "Error ALGO PASO: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
 ?>