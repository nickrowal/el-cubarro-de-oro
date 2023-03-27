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
include 'cone.php';
$email = $_POST['email'];
$foto = $_FILES['nfoto'];
echo $foto['tmp_name'];
$directorio_destino = "images";

$tmp_name = $foto['tmp_name'];
    
    
        $img_file = $foto['name'];
        $img_type = $foto['type'];
        echo 1;
        // Si se trata de una imagen   
        if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
 strpos($img_type, "jpg")) || strpos($img_type, "png")))
        {
            //¿Tenemos permisos para subir la imágen?
            //echo 2;
            $destino = $directorio_destino . '/' .  $img_file;
            mysqli_query($con, "UPDATE usuarios SET foto = '$destino' WHERE email = '$email';");
           (move_uploaded_file($tmp_name, $destino))
        
                ?>

<script type="text/javascript">
    window.location = "editar.php";
 </script>
                <?php  

            }
    



    

 ?>

 <script type="text/javascript">
     window.location = "menuPrincipal.php";
 </script>