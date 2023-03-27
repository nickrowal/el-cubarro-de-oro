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
 	$consulta=consultaPersona($_GET['email']);

 	function consultaPersona($email_persona)
 	{
        include 'conexion.php';
 		$s ="SELECT * FROM usuarios WHERE email='".$email_persona."' ";
		$result= mysqli_query($conn,$s) ; 
 		$filas=mysqli_fetch_assoc($result);
 		return[
            $filas['foto'],
            $filas['nombre'],
 			$filas['apellido'],
 			$filas['Identificacion'],
 			$filas['edad'],
 			$filas['grado'],
 			$filas['email'],
 			$filas['id_cargo']
 		];
 	}
 ?> 
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <title>ModificarDatos</title>
    <link rel="icon" type="image/jpg" href="https://i.ibb.co/BTczYFc/logo-Proyecto.png"/>
    
    <link rel="stylesheet" href="administrador/nicepage.css" media="screen">
<link rel="stylesheet" href="administrador/ModificarDatos.css" media="screen">
    <script class="u-script" type="text/javascript" src="administrador/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="administrador/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.7.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
    
    <script type="application/ld+json">{
		"@type": "Organization",
		"name": "dilan",
		"logo": "images/logo-Proyecto.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="ModificarDatos">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-gradient u-header u-header" id="sec-a4ee"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="logout.php" class="u-image u-logo u-image-1" data-image-width="582" data-image-height="582">
          <img src="administrador/images/logo-Proyecto.png" class="u-logo-image u-logo-image-1">
        </a>
        <h2 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1"> Actualización de datos</h2>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-02e3">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-22 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-radius-25 u-size-30 u-white u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h1 class="u-custom-font u-font-oswald u-text u-text-1">
                    <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-custom-font u-font-arial u-hover-none u-none u-text-custom-color-1 u-btn-1" href="tablaDatos.php">Semillas de cubarro<span style="font-size: 3.75rem;"></span>
                    </a>
                  </h1>
                  <input type="hidden" name="email" value="<?php echo $consulta[0]; ?>">
                  <img class="u-image u-image-circle u-image-1" src="<?php echo $consulta[0]; ?>" alt="" data-image-width="1280" data-image-height="853">
                  <center><h3 COLOR="blue">Perfil de <?php echo $consulta[6]; ?> </h3></center>
                </div>
              </div>
              <div class="u-container-style u-grey-10 u-layout-cell u-radius-50 u-size-30 u-layout-cell-2">
                <div class="u-border-2 u-border-black u-container-layout u-container-layout-2">
                  <h3 class="u-custom-font u-font-oswald u-text u-text-2">Modificando datos </h3>
                  <div class="u-table u-table-responsive u-table-1">
                  <form action="validacionmodificarDatos.php" method="post">
                    <table class="u-table-entity">
                    <input type="hidden" name="email" value="<?php echo $_GET['email']  ?>"> 
                      <colgroup>
                        <col width="50%">
                        <col width="50%">
                      </colgroup>
                      <tbody class="u-table-body">
                        <tr style="height: 26px;">
                          <td class="u-align-center u-custom-font u-first-column u-font-arial u-table-cell u-table-cell-1">Nombre</td>
                          <td class="u-table-cell"><input type="text" name="nombre" value="<?php echo $consulta[1] ?>" required>
  			              </td>
                        </tr>
                        <tr style="height: 46px;">
                          <td class="u-align-center u-custom-font u-first-column u-font-arial u-table-cell u-table-cell-3">Apellido</td>
                          <td class="u-table-cell"><input type="text" name="apellido" value="<?php echo $consulta[2] ?>" required>	</td>
                        </tr> 
                        <tr style="height: 46px;">
                          <td class="u-align-center u-custom-font u-first-column u-font-arial u-table-cell u-table-cell-7">Identificacion</td>
                          <td class="u-table-cell"><input type="text" name="Identificacion"  id="Identificacion" value="<?php echo $consulta[3] ?>"pattern="[A-Za-z0-9_-]{1,15}" required></td>
                        </tr>
                        <tr style="height: 46px;">
                          <td class="u-align-center u-custom-font u-first-column u-font-arial u-table-cell u-table-cell-5">Edad</td>
                          <td class="u-table-cell"><input type="number" name="edad" value="<?php echo $consulta[4] ?>"pattern="[A-Za-z0-9_-]{1,15}" required></td>
                        </tr>
                       
                        <tr style="height: 46px;">
                          <td class="u-align-center u-custom-font u-first-column u-font-arial u-table-cell u-table-cell-7">Grado</td>
                          <td class="u-table-cell"><input type="text" name="grado"  id="grado" value="<?php echo $consulta[5] ?>"pattern="[A-Za-z0-9_-]{1,15}" required></td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                  <br>
                    <button class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-2 u-radius-50 u-btn-3"" name="btnIngresar" type="submit">Enviar nuevos datos</button> </center>    
                <br>
                </form >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-gradient u-footer" id="sec-093a"><div class="u-clearfix u-sheet u-sheet-1"></div></footer>  
</body></html> 