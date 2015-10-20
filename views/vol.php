<!DOCTYPE html>
<html lang="en">
<head>
	<?php//Enlaces para los ficheros css?>
	<!--<link rel="stylesheet" href="../css/bootstrap.min.css">-->
	<link rel="stylesheet" href="../css/materialize.min.css">
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="icon" type="image/png" href="http://i.imgur.com/nhrFGTf.png" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?	//No olvidar modificar las rutas con los namespaces de composer 	?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Voluntariado UGB</title>
</head>
<body>
	<header>
		<?php
			require '../layout/hea.php';
		?><br>
	    <div class=" hide-on-small-only">
          	<div class=""> 
            	<img src="../img/vol.png" class=" responsive-img">
          	</div>
        </div>
		<br>
	</header>
 	<div>
		<?php
 		require '../layout/slider.php';
 		?>
	</div>
	<br>
	<div class="main">
		<section class="row row pull-right">
			<?php
	 		require '../layout/new.php';
	 		?> 
		</section>
		<section class="row container">
			<div class="divider"></div><div class="section"><h1>Acerca de los voluntarios</h1></div><div class="divider"></div>
			<div class="row">
				<div class="col">
					
				</div>
			</div>
		</section>
	</div>
	<footer class="page-footer red darken-1">
		<?php
			require '../layout/foo.php';
		?>
	</footer>
<?php//Enlaces para las librerías js?>
<script src="../js/jquery.min.js"></script>
<!--<script src="../js/bootstrap.min.js"></scrip>-->	
<script src="../js/materialize.min.js"></script>
<script src="../js/functions.js"></script>
<?php//No olvidar modificar rutas con los namespaces de composer js?>
</body>
</html>