<?php include 'cone.php';
	session_start();
	?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <title>Menu Principal</title>
    <link rel="icon" type="image/jpg" href="https://i.ibb.co/BTczYFc/logo-Proyecto.png"/>
    <link rel="stylesheet" href="administrador/nicepage.css" media="screen">
<link rel="stylesheet" href="administrador/menuPrincipal.css" media="screen">
    <script class="u-script" type="text/javascript" src="administrador/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="administrador/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.7.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
		//echo "no estais autorizado men";
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
  $apellido = $valores['apellido'];
	$email = $valores['email'];
	$foto = $valores['foto'];
	 ?>
    <script type="application/ld+json">{
		"@type": "Organization",
		"name": "dilan",
		"logo": "images/logo-Proyecto.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="menuPrincipal">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-gradient u-header u-header" id="sec-a4ee"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="logout.php" class="u-image u-logo u-image-1" data-image-width="582" data-image-height="582">
          <img src="administrador/images/logo-Proyecto.png" class="u-logo-image u-logo-image-1">
        </a>
        <h2 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1"> Panel de administracion</h2>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-02e3">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-22 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-container-style u-grey-5 u-layout-cell u-radius-25 u-shape-round u-size-40 u-layout-cell-1">
                    <div class="u-border-2 u-border-black u-container-layout u-container-layout-1">
                      <h1 class="u-custom-font u-font-oswald u-text u-text-default u-text-1">Semillas de cubarro<span style="font-size: 3.75rem;"></span>
                      </h1>
                      <h3 class="u-custom-font u-font-oswald u-text u-text-default u-text-2">Menu principal</h3>
                      <ul class="u-custom-font u-font-oswald u-text u-text-1">
                        <br>
                        <li><a href="editar.php"><i class="icon fa fa-user fa-fw"></i> Perfil</a></li>			
                        <li><a href="formularioIngreso.php"><i class="fa fa-user-plus"></i>Registro de un nuevo usuario </a></li>
			            <li><a href="tablaDatos.php"><i class="fa fa-address-book"></i> Usuarios registrados  </a></li>
			            <li><a href="tablainstrumentios.php"><i class="icon fa fa-table fa-fw"></i>Instrumentos registrados </a></li>
                  <br>
                        <li><a href="tablaPrestamos.php"><i class="fa fa-music"></i> Solicitud de préstamos </a></li>
                        <li><a href="tablaAceptados.php"><i class="fa fa-music"></i> Aceptación de instrumentos   </a></li>
                        <li><a href="tablaCancelados.php"><i class="fa fa-music"></i> instrumentos cancelados </a></li>
                        <li><a href="tablaAlmacen.php"><i class="fa fa-music"></i> Historial de instrumentos devueltos  </a></li>

                        <br>
                        <li><a href="buzonsugerencias.php"><i class="fa fa-globe"></i> Buzon de sugerencias</a></li>
                        <li><a href="modificartextos.php"><i class="fa fa-globe"></i> Blog</a></li>
		                <li><a href="logout.php"><i class="fa fa-sign-out"></i>Salir</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="u-container-style u-grey-10 u-layout-cell u-radius-50 u-shape-round u-size-20 u-layout-cell-2">
                    <div class="u-border-2 u-border-black u-container-layout u-container-layout-2">
                      <h3 class="u-custom-font u-font-oswald u-text u-text-4">Mi perfil&nbsp;</h3>
                      <img class="u-image u-image-circle u-image-1" src="<?php echo $foto; ?>" alt="" data-image-width="1280" data-image-height="853">
                      <ul class="u-custom-font u-font-oswald u-text u-text-5">
                            <li>Usuario: <?php echo " $id";  ?></li>
                            <li>Nombre: <?php echo "$nombre"; ?></li>
                            <li>Apellido: <?php echo "$apellido"; ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-container-style u-grey-5 u-layout-cell u-radius-25 u-shape-round u-size-20 u-layout-cell-3">
                    <div class="u-border-2 u-border-black u-container-layout u-valign-middle u-container-layout-3">
                      <div class="fr-view u-align-center u-clearfix u-rich-text u-text u-text-6">
                        <h4>
                          <span style="font-weight: 700;">Novedades</span>
                        </h4>
                        <p style="text-align: left;">
          <?php
					$consulta5 = mysqli_query($con, "SELECT * FROM textos WHERE idTextos = '5';");
					$valores5= mysqli_fetch_array($consulta5);
					$idTextos5 = $valores5['idTextos'];
					$texto5 = $valores5['texto'];
					?> 
                          <span style="line-height: 2.0;"><?php echo $texto5; ?></span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="u-container-style u-image u-layout-cell u-size-40 u-image-2" data-image-width="1518" data-image-height="1527">
                    <div class="u-container-layout u-valign-top u-container-layout-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-gradient u-footer" id="sec-093a"><div class="u-clearfix u-sheet u-sheet-1"></div></footer>
  
</body></html>