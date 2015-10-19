<!DOCTYPE html>
<html lang="en">
<head>
	<?php 	//Enlaces para los ficheros css?>
	<!--<link rel="stylesheet" href="../css/bootstrap.min.css">-->
	<link rel="stylesheet" href="../css/materialize.min.css">
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="icon" type="image/png" href="http://i.imgur.com/nhrFGTf.png" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?	//No olvidar modificar las rutas con los namespaces de composer 	?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Tutorías UGB</title>
</head>
<body>
	<header>
		<?php
			require '../layout/hea.php';
		?><br>
	    <div class=" hide-on-small-only">
          	<div class=""> 
            	<img src="../img/tut.png" class=" responsive-img">
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
			<div class="divider"></div><div class="section"><h1>¿En qué consisten las tutorías?</h1></div><div class="divider"></div>
			<div class="row">
				<div class="col s12 m12 l12">
					
				</div>
			</div>
		</section>
		<section class="row container">
			<div class="divider"></div><div class="section"><h1>Áreas de desarrollo fomentadas</h1></div><div class="divider"></div>
			<div class="row">
				<div class="col s6 m6 l6">
					<a class="modal-trigger" href="#modal1">
						<div class="card">
					    	<div class="card-image waves-effect waves-block waves-light">
					      		<img class="" src="../img/typ.png">
					    	</div>
					    	<div class="card-content">
					      		<span class="card-title grey-text text-darken-4">Área Personal/Social<i class="material-icons right">more_vert</i></span>
					    	</div>
					    </div>
					</a>
					<div id="modal1" class="modal">
    					<div class="modal-content">
					    	<h4>Área Personal/Social</h4><hr>
					    	<div class="row">
					    		<div class="col s4 m4 l4">
					    			<img src="../img/typ.png" alt="" class="responsive-img">
					    		</div>
					    		<div class="col s8 m8 l8">
					    			<div class="card-panel cyan lighten-1">
							          	<span class="white-text">I am a very simple card. I am good at containing small bits of information.
							          	I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
							          	</span>
							        </div>
					    		</div>
					    	</div>
					    	<div class="row">
					    		<div class="col s4 m4 l4">
					    			<div class="card-panel cyan lighten-1">
							          	<span class="white-text">I am a very simple card. I am good at containing small bits of information.
							          	I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
							          	</span>
							        </div>
					    		</div>
					    		<div class="col s8 m8 l8">
					    			<ul class="collection with-header">
							        	<li class="collection-header"><h4>First Names</h4></li>
							        	<li class="collection-item">Alvin</li>
							        	<li class="collection-item">Alvin</li>
							        	<li class="collection-item">Alvin</li>
							        	<li class="collection-item">Alvin</li>
							      	</ul>
					    		</div>
					    	</div>
					    </div>
						<div class="modal-footer">
						    <a href="#!" class="red darken-1 white-text modal-action modal-close waves-effect waves-light btn-flat btn-large">Cerrar</a>
						</div>
					</div>
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