<?php include 'cone.php';
	session_start();
	?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Digital product marketing agency, ​Make your marketing more effective, ​Convert more customers and grow more revenue now, 560k, 79%, 80%, 1340, ​Why you need digital marketing, ​Get Free SEO Analysis?, ​Got New Project?, Read what our customers say">
    <meta name="description" content="">
    <title>buzon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" type="image/jpg" href="https://i.ibb.co/BTczYFc/logo-Proyecto.png"/>
    <link rel="stylesheet" href="sugerencia/nicepage.css" media="screen">
<link rel="stylesheet" href="sugerencia/buzon.css" media="screen">
    <script class="u-script" type="text/javascript" src="sugerencia/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="sugerencia/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
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

    ?>

    
    <script type="application/ld+json">{
		"@type": "Organization",
		"name": "dilan",
		"logo": "images/logo-Proyecto.png"
}</script>
    <meta name="theme-color" content="#1847b8">
    <meta property="og:title" content="buzon">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap u-xl-mode" data-lang="es"><header class="u-clearfix u-gradient u-header u-header" id="sec-8ac9"><div class="u-clearfix u-sheet u-valign-bottom-xs u-sheet-1">
        <a href="logout.php" class="u-image u-logo u-image-1" data-image-width="582" data-image-height="582">
          <img src="sugerencia/images/logo-Proyecto.png" class="u-logo-image u-logo-image-1">
        </a>
        <h2 class="u-align-left u-text u-text-1"> buzon de sugerencias<br>
        </h2>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-8ade">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-table u-table-responsive u-table-1">
          <table class="u-table-entity">
            
            <colgroup>
              <col width="100%">
            </colgroup>
            <tbody class="u-table-body">
              <tr style="height: 49px;">
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-1">
               
                <?php
			include "conexion.php";
            //select count(*) from buzonsugerencias;
			$consltas = "SELECT COUNT(*) FROM buzonsugerencias";
			$resultado = mysqli_query($conn, $consltas);
		 	while($row = mysqli_fetch_array($resultado)){
				echo "Solicitudes de sugerencias: $row[0]<br>";
				$nicolas=$row[0];
				if($nicolas==0){
					echo "<br>NO.. hay solicitudes Solicitudes de sugerencias :D";
				}
			 }
		?>

                    Sugerencias&nbsp; que dan los estudiantes y profesores&nbsp;
                    <br><a href="menuPrincipal.php"style="color:#005423 ;"><i class="fa fa-mail-reply style color:green"></i> Atrás</a><br>
                </td>
              </tr>
              <tr style="height: 49px;">
              <?php
include "conexion.php";
			$sql = "SELECT * FROM  buzonsugerencias" ; 			
			$result= mysqli_query($conn, $sql); 
      
while ($filas=mysqli_fetch_assoc($result) )
			{
                echo "<td class='u-border-1 u-border-grey-dark-1 u-table-cell'>&nbsp;";
                //echo $filas['id_sugerencia']; echo "<br>";
                echo "<strong>Email del solicitante:  </strong>";
                echo $filas['email']; echo "<br>";
                echo "<strong>-Solicitud de sugerencia: </strong>";
                echo  $filas['sugerencia']; echo "<br>";
                echo "<br>";
                echo "<strong>-Contestación a sugerencia : </strong>";
                echo  $filas['respuesta']; echo "<br>";
                echo "<br><a href='buzoncontestar.php?id_sugerencia=".$filas['id_sugerencia']."'> <center><button type='button' class=' u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-50 ' onclick='return confirmDelete()'><strong> Contestar sugerencia  </strong></button></a></center> ";
               
                echo "<br>";
               echo"</td>";
                echo"</tr>";
            }
?>
                <!--<td class="u-border-1 u-border-grey-dark-1 u-table-cell">&nbsp;Email : dilanicolas040@gmail.com</td>
              </tr>-->
            </tbody>
          </table>
          <br>
        </div>
        <!--<a href="https://nicepage.com/html-website-builder" class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-50 u-btn-3"><span class="u-file-icon u-icon u-text-white u-icon-1"><img src="sugerencia/images/2512077-93c2067d.png" alt=""></span>&nbsp;Botón
        </a>-->
      </div>
    </section>
    <style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
background-color: #ffffff !important; background-image: linear-gradient(#005423, white) !important
}</style>
    
    
    <footer class="u-align-center u-clearfix u-footer u-gradient u-footer" id="sec-60e0"><div class="u-align-left u-clearfix u-sheet u-sheet-1"></div></footer>

</body></html>