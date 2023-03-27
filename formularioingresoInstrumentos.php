<?php include 'cone.php';
	session_start();
	?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Digital product marketing agency, ​Make your marketing more effective, ​Convert more customers and grow more revenue now, 560k, 79%, 80%, 1340, ​Why you need digital marketing, ​Get Free SEO Analysis?, ​Got New Project?, Read what our customers say">
    <meta name="description" content="">
    <title>formulario</title>
    <link rel="icon" type="image/jpg" href="https://i.ibb.co/BTczYFc/logo-Proyecto.png"/>
    <link rel="stylesheet" href="formulario/nicepage.css" media="screen">
<link rel="stylesheet" href="formulario/formulario.css" media="screen">
    <script class="u-script" type="text/javascript" src="formulario/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="formulario/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo-Proyecto.png"
}</script>
    <meta name="theme-color" content="#1847b8">
    <meta property="og:title" content="formulario">
    <meta property="og:type" content="website">
  </head>
  <?php include 'cone.php';
	//session_start();
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
	$id = $_SESSION['id'];
	$consulta = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$id';");
	$valores = mysqli_fetch_array($consulta);
	$nombre = $valores['nombre'];
	$email = $valores['email'];
	$foto = $valores['foto'];
	 ?>
   
  <body class="u-body u-overlap u-xl-mode" data-lang="es"><header class="u-clearfix u-gradient u-header u-header" id="sec-8ac9"><div class="u-clearfix u-sheet u-valign-bottom-xs u-sheet-1">
        <a href="logout.php" class="u-image u-logo u-image-1" data-image-width="582" data-image-height="582">
          <img src="formulario/images/logo-Proyecto.png" class="u-logo-image u-logo-image-1">
        </a>
        <h2 class="u-align-left u-text u-text-1"> Semillas de Cubarro<br>
        </h2>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-3a36">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="tablainstrumentios.php" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-6 u-radius-50 u-btn-1"> &nbsp; <span class="u-file-icon u-icon u-icon-1"><img src="formulario/images/318339.png" alt=""></span>&nbsp;Instrumentos registrados
        </a>
        <br>
        <br>
        <h2 class="u-text u-text-default u-text-1"> Formulario de ingreso de nuevos usuarios </h2>
        <div class="u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
          <form action="validacioningresoInstrumentos.php" method="post">
          <!--<input type="number" name="cedula" pattern="[A-Za-z0-9_-]{1,15}" required>-->
          <div class="u-form-group u-form-name u-label-none">
              <label for="name-3b9a" class="u-label">Name</label>
              <input type="text" placeholder="Nombre del  instrumento" id="name-3b9a" name="instrumentosNombre" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"pattern="[A-Za-z0-9_-]{1,15}" required>        
            </div>
            <div class="u-form-email u-form-group u-label-none">
              <label for="email-3b9a" class="u-label">Email</label>
              <input type="number" placeholder="Cantidad de instrumentos" id="email-3b9a" name="existencia" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" pattern="[A-Za-z0-9_-]{1,15}" required>
            </div>           

          <input type="submit" value="Listo" name="btnIngresar"class="u-border-2 u-border-grey-75 u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-hover-custom-color-2 u-radius-50 u-btn-2">
          </form>
        </div>
      </div>
    </section>
    <style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
background-image: linear-gradient(#005423, white) !important
}</style>
    
    
    <footer class="u-align-center u-clearfix u-footer u-gradient u-footer" id="sec-60e0"><div class="u-align-left u-clearfix u-sheet u-sheet-1"></div></footer>  
</body></html>