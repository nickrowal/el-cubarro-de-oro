<?php 
include 'cone.php';
	session_start();
		?>

<script>
    function mostrarContrasena(){
        var tipo = document.getElementById("password");
        if(tipo.type == "password"){
            tipo.type = "text";
        }else{
            tipo.type = "password";
        }
    }
  </script>
<?php 
include 'cone.php';
	//session_start();
	if (isset($_SESSION['id'])) {
		
	}else{
		?>
		<script type="text/javascript">
			window.location = "./";
		</script>
		<?php 
	}
	$id = $_SESSION['id'];
	$consulta = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$id';");
	$valores = mysqli_fetch_array($consulta);

	$nombre = $valores['nombre'];
	$email = $valores['email'];
    $foto = $valores['foto'];

	$Identificacion= $valores['Identificacion'];  
    $apellido = $valores['apellido'];
    $edad = $valores['edad'];
    $grado = $valores['grado'];
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
        <h2 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1"> Actualiza tus datos</h2>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-02e3">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-22 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-radius-25 u-size-30 u-white u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h1 class="u-custom-font u-font-oswald u-text u-text-1">
                    <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-custom-font u-font-arial u-hover-none u-none u-text-custom-color-1 u-btn-1" href="editar.php">Semillas de cubarro<span style="font-size: 3.75rem;"></span>
                    </a>
                  </h1>
                  <img class="u-image u-image-circle u-image-1" src="<?php echo $foto; ?>" alt="" data-image-width="1280" data-image-height="853">
                  <center><a href="fotoPerfil.php"><strog>[Cambiar foto de perfil]</strog></a></center>
                </div>
              </div>
              <div class="u-container-style u-grey-10 u-layout-cell u-radius-50 u-size-30 u-layout-cell-2">
                <div class="u-border-2 u-border-black u-container-layout u-container-layout-2">
                  <h3 class="u-custom-font u-font-oswald u-text u-text-2">Cambia tus datos</h3>
                  <div class="u-table u-table-responsive u-table-1">
                  <form action="validacioneditarpersona.php" method="post">
                  <?php 
 include "cone.php";
 $usuario =$_SESSION['id'] ;

 $consulta=consultaPersona($usuario);
 	function consultaPersona($id_persona)
 	{
 		include "cone.php";
   
 		$s ="SELECT * FROM usuarios WHERE email='".$id_persona."' ";

		$result= mysqli_query($con,$s) ; 
 		$filas=mysqli_fetch_assoc($result);
 		return[
			//$filas['clave'],
      $filas['psw'],
 			$filas['nombre'],
 			$filas['email'],
 			$filas['foto'],
 			$filas['id_cargo'],
      $filas['Identificacion'],
 			$filas['apellido'],
 			$filas['edad'],
 			$filas['grado'],
 		];
    }
 ?>
                    <table class="u-table-entity">
                      <colgroup>
                        <col width="50%">
                        <col width="50%">
                      </colgroup>
                      <tbody class="u-table-body">
                        <tr style="height: 26px;">
                          <td class="u-align-center u-custom-font u-first-column u-font-arial u-table-cell u-table-cell-1">nombre</td>
                          <td class="u-table-cell"><input type="text" name="nombre" value="<?php echo $consulta[1] ?>" required>
  			              </td>
                        </tr>
                        <tr style="height: 46px;">
                          <td class="u-align-center u-custom-font u-first-column u-font-arial u-table-cell u-table-cell-3">Apellido</td>
                          <td class="u-table-cell"><input type="text" name="apellido" value="<?php echo $consulta[6] ?>" required>	</td>
                        </tr>
                        <tr style="height: 46px;">
                          <td class="u-align-center u-custom-font u-first-column u-font-arial u-table-cell u-table-cell-5">Edad</td>
                          <td class="u-table-cell"><input type="number" name="edad" value="<?php echo $consulta[7] ?>"pattern="[A-Za-z0-9_-]{1,15}" required></td>
                        </tr>
                        <tr style="height: 46px;">
                          <td class="u-align-center u-custom-font u-first-column u-font-arial u-table-cell u-table-cell-7">Contraseña</td>
                          <td class="u-table-cell"><input type="password" name="psw"  id="password" value="<?php echo $consulta[0] ?>"pattern="[A-Za-z0-9_-]{1,15}" required></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <br>
                  <button class="u-border-none u-btn u-btn-round u-button-style u-hover-custom-color-1 u-none u-radius-50 u-btn-2" type="button" onclick="mostrarContrasena()"><span class="u-file-icon u-icon u-icon-1"><img src="administrador/images/2763126.png" alt=""></span></button> 
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