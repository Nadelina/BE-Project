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
 	<?php
 		require '../layout/slider.php';
 	?>
	<div class="row">
		<?php
		require '../layout/new.php';
		?>
		<section id="about" class="col s12 m9">
			<div class="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis facere corporis quos ad expedita a mollitia nostrum dolore architecto id odio omnis dolor fugiat vitae nihil, impedit, magnam sequi aperiam.</p>
			</div>
		</section>

		<section id="requi" class="col s12 m9">
			<div class="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium harum possimus repudiandae ipsa repellendus, consequuntur doloribus omnis dolor sint, totam! Blanditiis unde, quia iusto est labore dolorem, libero quas sit.</p>
			</div>
		/section>
	</div>
	<footer class="page-footer blue darken-1">
		<?php
			require '../layout/foo.php';
		?>
	</footer>
</body>
</html>