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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/jpg" href="https://i.ibb.co/BTczYFc/logo-Proyecto.png"/>
   

    
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
            <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
          <!--
        <a href="tablaDatos.php" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-6 u-radius-50 u-btn-1"> &nbsp; <span class="u-file-icon u-icon u-icon-1"><img src="formulario/images/318339.png" alt=""></span>&nbsp;Usuarios registrados
        </a>-->
        <br>
        <h2 class="u-text u-text-default u-text-1"> Formulario de ingreso de nuevos usuarios </h2>       
        <div class="u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
          <form action="validacionIngresoPersona.php" method="post">
               <div id="contenido">
     <center>    
    <p class="panel-heading">
		<a href="tablaDatos.php" style="color:#005423" ;><i class="fa fa-mail-reply"></i> Usuarios registrados</a><br>
            </center></p>
</div>
            
          <!--<input type="number" name="cedula" pattern="[A-Za-z0-9_-]{1,15}" required>-->
          <div class="u-form-group u-label-none u-form-group-2">
              <label for="text-ddf4" class="u-label">Entrada</label>
              <input type="text" placeholder="Identificacion" id="text-ddf4" name="Identificacion" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-white"required>
          </div>
          <div class="u-form-email u-form-group u-label-none">
              <label for="email-3b9a" class="u-label">Email</label>
              <input type="text" placeholder="Nombres" id="email-3b9a" name="nombre" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"  required>
            </div>
            <div class="u-form-group u-label-none u-form-group-3">
              <label for="text-b38c" class="u-label">Entrada</label>
              <input type="text" placeholder="Apellido" id="text-b38c" name="apellido" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"required>
            </div>
            <div class="u-form-group u-label-none u-form-group-4">
              <label for="text-6646" class="u-label">Entrada</label>
              <input type="text" placeholder="Clave" id="text-6646" name="psw" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"required>
            </div>
            <div class="u-form-group u-label-none u-form-group-5">
              <label for="text-eaff" class="u-label">Entrada</label>
              <input type="email" placeholder="Correo" id="text-eaff" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"required>
            </div>
            <div class="u-form-group u-label-none u-form-group-6">
              <label for="text-c613" class="u-label">Entrada</label>
              <input type="number" placeholder="Edad" id="text-c613" name="edad" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"required>
            </div>

            <div class="u-form-group u-form-select u-label-none u-form-group-7">
              <label for="select-835a" class="u-label">Desplegable</label>
              <div class="u-form-select-wrapper">
                <select id="g" name="grado" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                  <option value="-Seleccione su grado">-Seleccione su grado o funcion</option>
                  <option value="Administrador">Administrador</option>
                  <option value="1. Primero">1. Primero</option>
                  <option value="2. Segundo">2. Segundo</option>
                  <option value="3. Tercero">3. Tercero</option>
                  <option value="4. Cuarto">4. Cuarto</option>
                  <option value="5. Quinto">5. Quinto</option>
                  <option value="6. Sexto">6. Sexto</option>
                  <option value="7. Séptimo">7. Séptimo</option>
                  <option value="8. Octavo">8. Octavo</option>
                  <option value="9. Noveno">9. Noveno</option>
                  <option value="10. Décimo">10. Décimo</option>
                  <option value="11. Once">11. Once</option>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>

            <div class="u-form-group u-form-select u-label-none u-form-group-8">
              <label for="select-835f" class="u-label">Desplegable</label>
              <div class="u-form-select-wrapper">
                <select id="Rol" name="id_cargo" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                  <option value=2>Estudiante/usuario</option>
                  <option value=1>Profesor/administrador</option>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
             <input type="hidden" placeholder="NULL"value="NULL" name="foto"> 
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