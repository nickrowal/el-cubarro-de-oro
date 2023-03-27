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
$foto = $_SESSION['id'];
	$id = $_SESSION['id'];
	include 'cone.php';
	$consulta = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$id';");
	$valores = mysqli_fetch_array($consulta);
	$nombre = $valores['nombre'];
	$email = $valores['email'];
	$foto = $valores['foto'] 
   
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <title>fotoPerfil</title>
    <link rel="icon" type="image/jpg" href="https://i.ibb.co/BTczYFc/logo-Proyecto.png"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="css/stilo.css">
    

    <link rel="stylesheet" href="atributos1/nicepage.css" media="screen">
<link rel="stylesheet" href="atributos1/fotoPerfil.css" media="screen">
    <script class="u-script" type="text/javascript" src="atributos1/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="atributos1/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.7.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo-Proyecto.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="fotoPerfil">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-gradient u-header u-header" id="sec-a4ee"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="logout.php" class="u-image u-logo u-image-1" data-image-width="582" data-image-height="582">
          <img src="atributos1/images/logo-Proyecto.png" class="u-logo-image u-logo-image-1">
        </a>
        <h2 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1">Modificar foto de perfil </h2>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-167b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-custom-font u-font-oswald u-text u-text-1">Usuario:<?php echo "$id";?>
			<br><a href="modificarDatos.php" class=" u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-3 u-radius-50 u-btn-1">Regresar</a>
		</p>
        <img class="u-image u-image-circle u-image-1" src="<?php echo $foto; ?>" alt="" data-image-width="1280" data-image-height="853">
               
        <div class="contenedor">
		<article>
    <!--<a href="https://nicepage.com" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-3 u-radius-50 u-btn-1">actualizar foto de perfil</a>-->
			<center><button id="btn-abrir-popup" class="btn-abrir-popup u-radius-50">Actualizar foto de perfil</button></center>
           
		</article>

		<div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h3>seleccionar tu nueva foto de perfil</h3>

				<form action="foto.php" method="post" enctype="multipart/form-data">
					<div class="contenedor-inputs">
                    <input type="text" name="email" value="<?php echo $email; ?>" style="display: none;">
                    <br>
		            Ingresa tu nuerva foto de perfil
                    <br>
		            <input type="file" name="nfoto">
					</div>
					<input type="submit" class="btn-submit" value="Actualizar">
				</form>
			</div>
		</div>
	</div>

	<script src="css/popup.js"></script>




       
</div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-gradient u-footer" id="sec-093a"><div class="u-clearfix u-sheet u-sheet-1"></div></footer>
  
</body></html>