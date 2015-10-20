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
	<title>Asociaciones Estudiantiles UGB</title>
</head>
<body>
	<header>
		<?php
			require '../layout/hea.php';
		?><br>
	    <div class=" hide-on-small-only">
          	<div class=""> 
            	<img src="../img/aso.png" class=" responsive-img">
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
		<section class="row pull-right">
			<?php
	 		require '../layout/new.php';
	 		?> 
		</section>
		<section class="row container">
			<div class="divider"></div><div class="section"><h1>Conócenos</h1></div><div class="divider"></div>
			<div class="row">
				
			</div>
		</section>
		<section class="row container">
			<div class="divider"></div><div class="section"><h1>Facultades y sus asociaciones</h1></div><div class="divider"></div>
			<div class="row">
				<div class="col s12 m12 l12">
					<div class="row">
						<div class="col s12 m12">
					    	<blockquote>
								<p class="title black-text flow-text">
			        			Cada Facultad de la <abbr title="Universidad Gerardo Barrios">UGB</abbr> cuenta con su propia Asociación de Estudiantes. <br>
			        			¡Anímate a conocer un poco de ellas!
		        				</p>
							</blockquote>
					    </div>
					</div>
					<div>
						<a class="modal-trigger" href="#modal1">
							<div class="col s12 m12 l12 grey lighten-4 z-depth-1 hoverable">
	              				<div class="center">
	                				<i class="large material-icons">trending_up</i>
	                				<p class=""><h5>ASOCIACIÓN DE CIENCIAS EMPRESARIALES </h5></p>
	              				</div>
            				</div> 	
						</a>
						<div id="modal1" class="modal">
    						<div class="modal-content">
					      		<h4>Asociación de Estudiantes de la Facultad Ciencias Empresariales</h4><hr>
					      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit non, optio eos. Cupiditate minus eius accusamus nemo vitae blanditiis sapiente at, eos dignissimos necessitatibus doloribus eaque esse totam vel temporibus.</p>
					    	</div>
						    <div class="modal-footer">
						      <a href="#!" class="red darken-1 white-text modal-action modal-close waves-effect waves-light btn-flat btn-large">Cerrar</a>
						    </div>
						</div>							
						<a class="modal-trigger" href="#modal2">
							<div class="col s12 m12 l12 grey lighten-4 z-depth-1 hoverable">
	              				<div class="center">
	                				<i class="large material-icons">work</i>
	                				<p class=""><h5>ASOCIACIÓN DE CIENCIAS JURÍDICAS</h5></p>
	              				</div>
            				</div> 	
						</a>
						<div id="modal2" class="modal">
    						<div class="modal-content">
					      		<h4>Asociación de Estudiantes de la Facultad Ciencias Jurídicas</h4><hr>
					      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit non, optio eos. Cupiditate minus eius accusamus nemo vitae blanditiis sapiente at, eos dignissimos necessitatibus doloribus eaque esse totam vel temporibus.</p>
					    	</div>
						    <div class="modal-footer">
						      <a href="#!" class="red darken-1 white-text modal-action modal-close waves-effect waves-light btn-flat btn-large">Cerrar</a>
						    </div>
						</div>
						<a class="modal-trigger" href="#modal3">
							<div class="col s12 m12 l12 grey lighten-4 z-depth-1 hoverable">
	              				<div class="center">
	                				<i class="large material-icons">language</i>
	                				<p class=""><h5>ASOCIACIÓN DE CIENCIAS Y HUMANIDADES</h5></p>
	              				</div>
            				</div> 	
						</a>
						<div id="modal3" class="modal">
    						<div class="modal-content">
					      		<h4>Asociación de Estudiantes de la Facultad Ciencia y Humanidades</h4><hr>
					      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit non, optio eos. Cupiditate minus eius accusamus nemo vitae blanditiis sapiente at, eos dignissimos necessitatibus doloribus eaque esse totam vel temporibus.</p>
					    	</div>
						    <div class="modal-footer">
						      <a href="#!" class="red darken-1 white-text modal-action modal-close waves-effect waves-light btn-flat btn-large">Cerrar</a>
						    </div>
						</div>
						<a class="modal-trigger" href="#modal4">
							<div class="col s12 m12 l12 grey lighten-4 z-depth-1 hoverable">
	              				<div class="center">
	                				<i class="large material-icons">settings_input_hdmi</i>
	                				<p class=""><h5>ASOCIACIÓN DE CIENCIA Y TECNOLOGÍA</h5></p>
	              				</div>
            				</div> 	
						</a>
						<div id="modal4" class="modal">
    						<div class="modal-content">
					      		<h4>Asociación de Estudiantes de la Facultad Ciencia y Tecnología</h4><hr>
					      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit non, optio eos. Cupiditate minus eius accusamus nemo vitae blanditiis sapiente at, eos dignissimos necessitatibus doloribus eaque esse totam vel temporibus.</p>
					    	</div>
						    <div class="modal-footer">
						      <a href="#!" class="red darken-1 white-text modal-action modal-close waves-effect waves-light btn-flat btn-large">Cerrar</a>
						    </div>
						</div>
						<a class="modal-trigger" href="#modal5">
							<div class="col s12 m12 l12 grey lighten-4 z-depth-1 hoverable">
	              				<div class="center">
	                				<i class="large material-icons">settings</i>
	                				<p class=""><h5>ASOCIACIÓN DE INGENIERÍA Y ARQUITECTURA</h5></p>
	              				</div>
            				</div> 	
						</a>
						<div id="modal5" class="modal">
    						<div class="modal-content">
					      		<h4>Asociación de Estudiantes de la Facultad Ingeniería y Arquitectura</h4><hr>
					      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit non, optio eos. Cupiditate minus eius accusamus nemo vitae blanditiis sapiente at, eos dignissimos necessitatibus doloribus eaque esse totam vel temporibus.</p>
					    	</div>
						    <div class="modal-footer">
						      <a href="#!" class="red darken-1 white-text modal-action modal-close waves-effect waves-light btn-flat btn-large">Cerrar</a>
						    </div>
						</div>
						<a class="modal-trigger" href="#modal6">
							<div class="col s12 m12 l12 grey lighten-4 z-depth-1 hoverable">
	              				<div class="center">
	                				<i class="large material-icons">library_add</i>
	                				<p class=""><h5>ASOCIACIÓN DE CIENCIAS DE LA SALUD</h5></p>
	              				</div>
            				</div> 	
						</a>
						<div id="modal6" class="modal">
    						<div class="modal-content">
					      		<h4>Asociación de Estudiantes de la Facultad Ciencias de la Salud</h4><hr>
					      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit non, optio eos. Cupiditate minus eius accusamus nemo vitae blanditiis sapiente at, eos dignissimos necessitatibus doloribus eaque esse totam vel temporibus.</p>
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