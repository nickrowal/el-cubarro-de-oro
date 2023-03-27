<?php 
include 'cone.php';
$email = $_POST['email'];
$psw = $_POST['psw'];

if(isset($_POST["btnIngresar"])){
	$query= mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$email' AND psw = '$psw';");
	$filas =mysqli_num_rows($query);
    $f=mysqli_fetch_array($query);

	if($filas==1){
		
		session_start();
		$_SESSION['id'] =$email;
		//$_SESSION['username'] =$cedula;
		
		
		if($f['id_cargo']==1){
			echo '<script>alert("Bienvenido  administrador"); window.location="menuPrincipal.php"</script>';
		}
		else if ($f['id_cargo']==2) {
            echo '<script>alert("Bienvenido  usuario "); window.location="menuPrincipalUsuario.php"</script>';
            }

	}
	else {
		echo '<script>alert("Logueado denegado "); window.location="./"</script>';

	}
}




 ?>