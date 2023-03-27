<?php 
include 'cone.php';
	session_start();
	if (isset($_SESSION['id'])) {
		
	}else{
		?>
		<script type="text/javascript">
			window.location = "./";
		</script>
		<?php 
    }
 	$consulta=consultaPersona($_GET['id_sugerencia']);

 	function consultaPersona($sugerenciaid)
 	{
        include 'conexion.php';
 		$ides ="SELECT * FROM buzonsugerencias WHERE id_sugerencia='".$sugerenciaid."' ";
		$result= mysqli_query($conn,$ides) ; 
 		$filas=mysqli_fetch_assoc($result);
 		return[
           // id_sugerencia`, `email`, `sugerencia`, `respuesta
            $filas['id_sugerencia'],
            $filas['email'],
            $filas['sugerencia'],			
            $filas['respuesta']
 		];
 	}
 ?> 

<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Digital product marketing agency, ​Make your marketing more effective, ​Convert more customers and grow more revenue now, 560k, 79%, 80%, 1340, ​Why you need digital marketing, ​Get Free SEO Analysis?, ​Got New Project?, Read what our customers say">
    <meta name="description" content="">
    <title>solicitud Sugerencia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/jpg" href="https://i.ibb.co/BTczYFc/logo-Proyecto.png"/>
    
    <link rel="stylesheet" href="sugerencia/nicepage.css" media="screen">
<link rel="stylesheet" href="sugerencia/solicitudSugerencia.css" media="screen">
    <script class="u-script" type="text/javascript" src="sugerencia/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="sugerencia/nicepage.js" defer=""></script>
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
    <meta property="og:title" content="solicitudSugerencia">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap u-xl-mode" data-lang="es"><header class="u-clearfix u-gradient u-header u-header" id="sec-8ac9"><div class="u-clearfix u-sheet u-valign-bottom-xs u-sheet-1">
        <a href="logout.php" class="u-image u-logo u-image-1" data-image-width="582" data-image-height="582">
          <img src="sugerencia/images/logo-Proyecto.png" class="u-logo-image u-logo-image-1">
        </a>
        <h2 class="u-align-left u-text u-text-1"> buzon de sugerencias<br>
        </h2>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-e425">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-28 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h1 class="u-align-left u-text u-text-black u-text-1" data-lang-en="​Digital product marketing agency"> ingresa tu sugerencia<br>
                  </h1>
                  <br>
                  <a href="buzonsugerencias.php"style="color:#005423 ;"><i class="fa fa-mail-reply style color:green"></i> Atrás</a>
                  <div class="u-form u-form-1">

        <form action="validacionBuzon.php" method="post">
        <input type="hidden" name="id_sugerencia" value="<?php echo $consulta[0]; ?>">
        <input type="hidden" name="email" value="<?php echo $consulta[1]; ?>">
        <input type="hidden" name="sugerencia" value="<?php echo $consulta[2]; ?>">
          <div class="u-form-group u-form-name u-label-none">
              <label for="name-3b9a" class="u-label">Name</label>
              <textarea placeholder="<?php echo $consulta[3] ?>" rows="4" cols="50" id="message-6797" name="respuesta" class="u-border-1 u-border-grey-90 u-input u-input-rectangle u-radius-15" required=""></textarea></div>
          <!--<input type="submit" value="Listo" name="btnIngresar"class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-radius-50 u-btn-1">-->
          <div class="u-align-center u-form-group u-form-submit u-form-group-2">
          <input type="submit" value="Contestar sugerencia" name="btnIngresar"class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-radius-50 u-btn-1">
          <br>
          </div>
        </form>
                    <!--
                    <form action="validacionBuzon.php"method="post" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form">
                      <div class="u-form-group u-form-message u-label-none u-form-group-1">
                        <label for="message-6797" class="u-label">Address</label>
                        <textarea placeholder="<?php echo $consulta[3] ?>" rows="4" cols="50" id="message-6797" name="message" class="u-border-1 u-border-grey-90 u-input u-input-rectangle u-radius-15" required=""></textarea>
                      </div>
                      
                      <div class="u-align-center u-form-group u-form-submit u-form-group-2">
                      </div>

                    </form>
-->
                  </div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <img class="u-image u-image-contain u-image-1" src="sugerencia/images/189sinttulo_20230317155256.png" data-image-width="1527" data-image-height="1253">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-gradient u-footer" id="sec-60e0"><div class="u-align-left u-clearfix u-sheet u-sheet-1"></div></footer>

  
</body></html>