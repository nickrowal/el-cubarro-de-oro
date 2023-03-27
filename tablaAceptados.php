<?php include 'cone.php';
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="atributos1/nicepage.css" media="screen">
<link rel="stylesheet" href="atributos1/tablaDatos.css" media="screen">
<script class="u-script" type="text/javascript" src="atributos1/jquery.js" defer=""></script>
<script class="u-script" type="text/javascript" src="atributos1/nicepage.js" defer=""></script>
<meta name="generator" content="Nicepage 5.7.9, nicepage.com">
<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/jpg" href="https://i.ibb.co/BTczYFc/logo-Proyecto.png"/>
   
    

	<link rel="icon" type="image/jpg" href="fotos/logoico.ico"/>
	<link rel="stylesheet" href="imagenRedonda.css" media="screen">
	<link rel="stylesheet" href="botonTabla.css" media="screen">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Instrumentos prestados  </title>
	<link rel="stylesheet" href="titulo.css">
</head>
<script type="text/javascript">
	function confirmDelete()
	{
		var respuesta =confirm("Estas seguro que ya entregaron el instrumento? ");
		if(respuesta==true){
			return true;
		}
		else{
			return false;
		}	
	}
</script>
<body class="u-body u-xl-mode" data-lang="es">
<header class="u-clearfix u-gradient u-header u-header" id="sec-a4ee"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="logout.php" class="u-image u-logo u-image-1" data-image-width="582" data-image-height="582">
          <img src="atributos1/images/logo-Proyecto.png" class="u-logo-image u-logo-image-1">
        </a>
        <center><h2 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1"> Instrumentos prestados</h2></center>
      </div>
</header>


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
	
<!--
        </p>
</article>
			-->
	<div id="contenido">
     <center>    
    <p class="panel-heading">
	Tabla de los estudiantes que mandaron una solicitud de préstamo
        para los instrumentos academia de música el Cubarro de Oro
        <br>
		<?php
        include "conexion.php";
        $consltas = "SELECT COUNT(id_prestamo) FROM prestamos where proceso='Solicitud aceptada'";
        $resultado = mysqli_query($conn, $consltas);
         while($row = mysqli_fetch_array($resultado)){
                echo "Datos en total de los solicitudes  $row[0]";
                $nicolas=$row[0];
                    if($nicolas==0){
                        echo "<br>NO.. hay solicitudes de préstamo:D";
                    }
         }


			 ?>
			 <br>

		<a href="menuPrincipal.php"style="color:#005423 ;"><i class="fa fa-mail-reply"></i> Atrás</a><br>
            </center></p>
		
    <br>
    <table border="2%" align="center">
		<thead>
			
			<th style="width: 100x;" colspan="3">
			<?php
			include "conexion.php";
			$consltas = "SELECT COUNT(id_prestamo) FROM prestamos where proceso='Solicitud aceptada'";
			$resultado = mysqli_query($conn, $consltas);
		 	while($row = mysqli_fetch_array($resultado)){
				echo "Solicitudes de préstamo: $row[0]";
				$nicolas=$row[0];
				if($nicolas==0){
					echo "<br>NO.. hay solicitudes de préstamo:D";
				}
			 }
		?>
        </th>
			<!--<center> <a href="ingresarPersonas.html"> <button type="button" class="btn btn-info">Nuevo</button> </a> </center>
			<center> <a href="inicioadministrador.php"> <button type="button" class="btn btn-info" >Regresar</button> </a></center>-->
		</thead>
		<?php
//que guarde todo en la variable centencia y que lo guarde en la variable resultado	  
			include "conexion.php";
			$sql = "SELECT * FROM  prestamos where proceso='Solicitud aceptada'" ; 			
			$result= mysqli_query($conn, $sql); 

            

        
while ($filas=mysqli_fetch_assoc($result) )
			{
					echo "<td>
                    <strong>Nombre del instrumento</strong> ";
                    echo $filas['instrumentosNombre']; echo "<br>";
                    $filas['id_prestamo'];

                    echo "<strong>Email del solicitante: </strong>"; echo $filas['email']; echo "<br>";
					echo "<strong>Fecha de la petición: </strong>"; echo $filas['fechaPeticion']; echo "<br>";
                    echo "<strong>Proceso de solicitud: </strong> "; echo $filas['proceso']; echo "<br>";
					echo "<strong>Fecha de entrega del instrumento:</strong> "; echo $filas['fechaValidacion']; echo "<br>";				
					//modificar
echo "<center><br> <a href='Devolucioninstrumento.php?id_prestamo=".$filas['id_prestamo']."'> <button type='button' class='boton_personalizado_4' onclick='return confirmDelete()'><strong>El instrumento fue entregado </strong></button></a></td></center> ";

echo "</tr>";
			}
			?>
<br>
	</table>
	<br>
    <br>
</div>

		<footer class="u-align-center u-clearfix u-footer u-gradient u-footer" id="sec-093a"><div class="u-clearfix u-sheet u-sheet-1"></div></footer>
    
</body>
</html>
