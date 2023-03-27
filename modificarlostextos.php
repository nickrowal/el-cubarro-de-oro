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
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="582" data-image-height="582">
          <img src="https://i.ibb.co/BTczYFc/logo-Proyecto.png" class="u-logo-image u-logo-image-1">
        </a>
        <h2 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1"> Panel de administracion editar</h2>
      </div></header>
      <br>
     <center> <a href="modificartextos.php"><i class="fa fa-mail-reply"></i> Atrás</a></center>
    <section class="u-clearfix u-section-1" id="sec-02e3">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-22 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-container-style u-grey-5 u-layout-cell u-radius-25 u-shape-round u-size-40 u-layout-cell-1">
                    <div class="u-border-2 u-border-black u-container-layout u-container-layout-1">
                      </h1>

<form action="validarTexto.php" method="post">   

<h3 class="u-text u-text-default u-text-1">Cambia la MISIÓN</h3>
    <p class="u-text u-text-2">
<?php 
include "cone.php";
$usuario =$_SESSION['id'] ;

$consulta=consultaPersona($usuario);
function consultaPersona($id_persona)
{
include "cone.php";

$s ="SELECT * FROM textos WHERE idTextos = 3 ";

$result= mysqli_query($con,$s) ; 
$filas=mysqli_fetch_assoc($result);
return[
//$filas['clave'],
$filas['idTextos'],
$filas['texto'],
];
}


?> 

<table border="0%" style="margin:auto; width: 350px; border-collapse:separate;border-spacing:160px 15xp;">
<thead>
<tr>
<td>		
<label> MISIÓN: </label>
<th>
<textarea name="texto" rows="8" cols="30"><?php echo $consulta[1] ?></textarea>
    <br>
</th>
</td>
</tr>
<tr>
<td>		
<label></label>
<th>
  <input type="hidden" name="idTextos"  id="password" value="<?php echo $consulta[0] ?>"pattern="[A-Za-z0-9_-]{1,15}" required>
</th>
</td>
</tr>

</table>
<br>
     <center> <button class="u-btn u-button-style u-btn-1" name="btnIngresar" type="submit">Enviar nueva misión</button> </center> 
    </form>
<br>
<form action="validarTexto.php" method="post">   

<h3 class="u-text u-text-default u-text-1">Cambia la VISIÓN</h3>
    <p class="u-text u-text-2">
<?php 
include "cone.php";
$usuario =$_SESSION['id'] ;

$consulta=consultaPersona2($usuario);
function consultaPersona2($id_persona)
{
include "cone.php";

$s ="SELECT * FROM textos WHERE idTextos = 4 ";

$result= mysqli_query($con,$s) ; 
$filas=mysqli_fetch_assoc($result);
return[
//$filas['clave'],
$filas['idTextos'],
$filas['texto'],
];
}


?> 

<table border="0%" style="margin:auto; width: 350px; border-collapse:separate;border-spacing:160px 15xp;">
<thead>
<tr>
<td>		
<label> VISIÓN: </label>
<th>
<textarea name="texto" rows="8" cols="30"><?php echo $consulta[1] ?></textarea>
    <br>
</th>
</td>
</tr>
<tr>
<td>		
<label></label>
<th>
  <input type="hidden" name="idTextos"  id="password" value="<?php echo $consulta[0] ?>"pattern="[A-Za-z0-9_-]{1,15}" required>
</th>
</td>
</tr>

</table>
<br>
     <center> <button class="u-btn u-button-style u-btn-1" name="btnIngresar" type="submit">Enviar nueva visión</button> </center> 
    </form>
                    </div>
                  </div>
                  <div class="u-container-style u-grey-10 u-layout-cell u-radius-50 u-shape-round u-size-20 u-layout-cell-2">
                    <div class="u-border-2 u-border-black u-container-layout u-container-layout-2">
                    <form action="validarTexto.php" method="post">   
<br>
<h3 class="u-text u-text-default u-text-1">Cambia el titulo</h3>
    <p class="u-text u-text-2">
<?php 
include "cone.php";
$usuario =$_SESSION['id'] ;

$consulta3=consultaPersona3($usuario);
function consultaPersona3($id_persona)
{
include "cone.php";

$s3 ="SELECT * FROM textos WHERE idTextos = 1 ";

$result3= mysqli_query($con,$s3) ; 
$filas3=mysqli_fetch_assoc($result3);
return[
//$filas['clave'],
$filas3['idTextos'],
$filas3['texto'],
];
}


?> 

<table border="0%" style="margin:auto; width: 350px; border-collapse:separate;border-spacing:160px 15xp;">
<thead>
<tr>
<td>		
<label> texto: </label>
<th>
<input type="text" name="texto" value="<?php echo $consulta3[1] ?>" required>
    <br>
</th>
</td>
</tr>
<tr>
<td>		
<label></label>
<th>
  <input type="hidden" name="idTextos"  id="password" value="<?php echo $consulta3[0] ?>"pattern="[A-Za-z0-9_-]{1,15}" required>
</th>
</td>
</tr>

</table>
<br>
     <center> <button class="u-btn u-button-style u-btn-1" name="btnIngresar" type="submit">Enviar nuevo titulo</button> </center> 
    </form> 
<br>
<form action="validarTexto.php" method="post">   

<h3 class="u-text u-text-default u-text-1">Texto informativo del sitio web</h3>
    <p class="u-text u-text-2">
<?php 
include "cone.php";
$usuario =$_SESSION['id'] ;

$consulta=consultaPersona1($usuario);
function consultaPersona1($id_persona)
{
include "cone.php";

$s ="SELECT * FROM textos WHERE idTextos = 2 ";

$result= mysqli_query($con,$s) ; 
$filas=mysqli_fetch_assoc($result);
return[
//$filas['clave'],
$filas['idTextos'],
$filas['texto'],
];
}


?> 

<table border="0%" style="margin:auto; width: 350px; border-collapse:separate;border-spacing:160px 15xp;">
<thead>
<tr>
<td>		
<label> Texto informativo del sitio web: </label>
<th>
<textarea name="texto" rows="8" cols="30"><?php echo $consulta[1] ?></textarea>
    <br>
</th>
</td>
</tr>
<tr>
<td>		
<label></label>
<th>
  <input type="hidden" name="idTextos"  id="password" value="<?php echo $consulta[0] ?>"pattern="[A-Za-z0-9_-]{1,15}" required>
</th>
</td>
</tr>

</table>
<br>
     <center> <button class="u-btn u-button-style u-btn-1" name="btnIngresar" type="submit">Enviar Texto informativo del sitio web</button> </center> 
    </form>
<br>
  
     </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-container-style u-grey-5 u-layout-cell u-radius-25 u-shape-round u-size-20 u-layout-cell-3">
                    <div class="u-border-2 u-border-black u-container-layout u-container-layout-1">
                      <div class="fr-view u-align-ring u-clearfix u-rich-text u-text u-text-1">
                      <form action="validarTexto.php" method="post">   

<h3 class="u-text u-text-default u-text-1">Cambia el texto de novedades</h3>
    <p class="u-text u-text-2">
<?php 
include "cone.php";
$usuario =$_SESSION['id'] ;

$consulta=consultaPersona5($usuario);
function consultaPersona5($id_persona)
{
include "cone.php";

$s ="SELECT * FROM textos WHERE idTextos = 5 ";
$result= mysqli_query($con,$s) ; 
$filas=mysqli_fetch_assoc($result);
return[
//$filas['clave'],
$filas['idTextos'],
$filas['texto'],
];
}


?> 

<table border="0%" style="margin:auto; width: 350px; border-collapse:separate;border-spacing:160px 15xp;">
<thead>
<tr>
<td>		
<label> Texto: </label>
<th>
<textarea name="texto" rows="8" cols="30"><?php echo $consulta[1] ?></textarea>
    <br>
</th>
</td>
</tr>
<tr>
<td>		
<label></label>
<th>
  <input type="hidden" name="idTextos"  id="password" value="<?php echo $consulta[0] ?>"pattern="[A-Za-z0-9_-]{1,15}" required>
</th>
</td>
</tr>

</table>
<br>
     <center> <button class="u-btn u-button-style u-btn-1" name="btnIngresar" type="submit">Enviar nuevas novedades</button> </center> 
    </form>    
      
            </div>
                    </div>
                  </div>
                  <div class="u-container-style u-image u-layout-cell u-size-40 u-image-2" data-image-width="100" data-image-height="100">

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