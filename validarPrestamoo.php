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
    $apellido = $valores['apellido'];
	$email = $valores['email'];
	$foto = $valores['foto'];
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
        <h2 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1"> Aceptación de los instrumentos </h2>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-02e3">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-22 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-radius-25 u-size-30 u-white u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h1 class="u-custom-font u-font-oswald u-text u-text-1">
                    <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-custom-font u-font-arial u-hover-none u-none u-text-custom-color-1 u-btn-1" href="tablaPrestamos.php">Semillas de cubarro<span style="font-size: 3.75rem;"></span>
                    </a>
                  </h1>
                  <img class="u-image u-image-circle u-image-1" src="https://i.ibb.co/ngJ5PJs/198-sin-t-tulo-20230317213213-1.png" alt="" data-image-width="1280" data-image-height="853">
                </div>
              </div>
              <div class="u-container-style u-grey-10 u-layout-cell u-radius-50 u-size-30 u-layout-cell-2">
                <div class="u-border-2 u-border-black u-container-layout u-container-layout-2">
                  <h3 class="u-custom-font u-font-oswald u-text u-text-2">Aceptación  </h3>
                  <div class="u-table u-table-responsive u-table-1">
                    <table class="u-table-entity">
                    <?php
//que guarde todo en la variable centencia y que lo guarde en la variable resultado	  
			include "conexion.php";
            $consulta=consultaPersona($_GET['id_prestamo']);

            function consultaPersona($idprestamo)
            {
               include 'conexion.php';
                $ides ="SELECT * FROM prestamos WHERE id_prestamo='".$idprestamo."' ";
               $result= mysqli_query($conn,$ides) ; 
       
                $filas=mysqli_fetch_assoc($result);
                return[
                   $filas['id_prestamo'],
                   $filas['instrumentosNombre'], 
                   $filas['email'], 
                   $filas['fechaPeticion'], 
                   $filas['proceso'], 
                   $filas['fechaValidacion']
                ];
            }
			?>

                    <form action="validacionpre.php" method="post"> 
                    <input type="hidden" name="id_prestamo" value="<?php echo $_GET['id_prestamo']  ?>"> 
                      <colgroup>
                        <col width="34.5%">
                        <col width="65.5%">
                      </colgroup>
                      <tbody class="u-table-body">
                        <tr style="height: 75px;">
                          <td class="u-align-center u-border-1 u-border-black u-custom-color-1 u-first-column u-table-cell">Instrumento
                         </td>
                          <td class="u-border-1 u-border-white u-table-cell">
                          <label> <?php echo $consulta[1] ?></label>
				<input type="Hidden" name="instrumentosNombre" value="<?php echo $consulta[1] ?>"required>  			
			
                         </td>
                        </tr>
                        <tr style="height: 75px;">
                          <td class="u-align-center u-border-1 u-border-black u-custom-color-1 u-first-column u-table-cell">Email<br>
                          </td>
                          <td class="u-border-1 u-border-white u-table-cell"> <label> <?php echo $consulta[2] ?></label>
  			<input type="hidden" name="email" value="<?php echo $consulta[2] ?>"pattern="[A-Za-z0-9_-]{1,15}"required>
  				
                          </td>
                        </tr>
                        <tr style="height: 75px;">
                          <td class="u-align-center u-border-1 u-border-black u-custom-color-1 u-first-column u-table-cell">Fecha de peticion</td>
                          <td class="u-border-1 u-border-white u-table-cell"><label><?php echo $consulta[3] ?></label>
  			<input type="hidden" name="fechaPeticion" value="<?php echo $consulta[3] ?>"pattern="[A-Za-z0-9_-]{1,15}"required>
  				</td>
                        </tr>
                        <tr style="height: 75px;">
                          <td class="u-align-center u-border-1 u-border-black u-custom-color-1 u-first-column u-table-cell">proceso</td>
                          <td class="u-border-1 u-border-white u-table-cell"><input type="Hidden" name="proceso" value="Solicitud aceptada">
			  <label>Solicitud aceptada</label></td>
                        </tr>
                        <tr style="height: 75px;">
                          <td class="u-align-center u-border-1 u-border-black u-custom-color-1 u-first-column u-table-cell">Fecha de entrega</td>
                          <td class="u-border-1 u-border-white u-table-cell">       
                               
                           <center> <input type="date"  name="fechaValidacion" value="<?php echo $consulta[5] ?>"required ><center>	</td>
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