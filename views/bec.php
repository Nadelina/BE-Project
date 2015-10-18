<!DOCTYPE html>
<html lang="es">
<head>
<?php //Enlaces para los ficheros css?>
	<!--<link rel="stylesheet" href="../css/bootstrap.min.css">-->
	<link rel="stylesheet" href="../css/materialize.min.css">
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="icon" type="image/png" href="http://i.imgur.com/nhrFGTf.png" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?	//No olvidar modificar las rutas con los namespaces de composer 	?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Becas UGB</title>
</head>
<body>
	<header>
		<?php
			require '../layout/hea.php';
		?><br>
	    <div class=" hide-on-small-only">
          	<div class=""> 
            	<img src="../img/bec.png" class=" responsive-img">
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
	 		<div class="col container"></div>
		</section>
		<section class="row container">
			<div class="divider"></div><div class="section"><h1>Tipos</h1></div><div class="divider"></div>
			<div class="row">
				<div class="col s12 m4 l6">
					<div class="card z-depth-0">
	    				<div class="card-image waves-effect waves-block waves-light">
	      					<img class="activator" src="../img/fam.jpg">
	    				</div>
		    			<div class="card-content">
		      				<span class="card-title activator indigo-text text-darken-4">Card<i class="material-icons right">more_vert</i></span>
		      				<p>This is a link</p>
		    			</div>
		    			<div class="card-reveal">
		      				<span class="card-title grey-text text-darken-4">Card<i class="material-icons right">close</i></span>
		      				<p></p>
		    			</div>
	  				</div>
				</div>
				<div class="col s12 m4 l6">
					<div class="card z-depth-0">
	    				<div class="card-image waves-effect waves-block waves-light">
	      					<img class="activator" src="../img/emp.jpg">
	    				</div>
		    			<div class="card-content">
		      				<span class="card-title activator indigo-text text-darken-4">Card<i class="material-icons right">more_vert</i></span>
		      				<p>This is a link</p>
		    			</div>
		    			<div class="card-reveal">
		      				<span class="card-title grey-text text-darken-4">Card<i class="material-icons right">close</i></span>
		      				<p></p>
		    			</div>
	  				</div>
				</div>
				<div class="col s12 m4 l6">
					<div class="card z-depth-0">
	    				<div class="card-image waves-effect waves-block waves-light">
	      					<img class="activator" src="../img/aca.jpg">
	    				</div>
		    			<div class="card-content">
		      				<span class="card-title activator indigo-text text-darken-4">Card<i class="material-icons right">more_vert</i></span>
		      				<p>This is a link</p>
		    			</div>
		    			<div class="card-reveal">
		      				<span class="card-title grey-text text-darken-4">Card<i class="material-icons right">close</i></span>
		      				<p></p>
		    			</div>
	  				</div>
				</div>
				<div class="col s12 m4 l6">
					<div class="card z-depth-0">
	    				<div class="card-image waves-effect waves-block waves-light">
	      					<img class="activator" src="../img/par.jpg">
	    				</div>
		    			<div class="card-content">
		      				<span class="card-title activator indigo-text text-darken-4">Card<i class="material-icons right">more_vert</i></span>
		      				<p>This is a link</p>
		    			</div>
		    			<div class="card-reveal">
		      				<span class="card-title grey-text text-darken-4">Card<i class="material-icons right">close</i></span>
		      				<p></p>
		    			</div>
	  				</div>
				</div>
				<div class="col s12 m4 l6">
					<div class="card z-depth-0">
	    				<div class="card-image waves-effect waves-block waves-light">
	      					<img class="activator" src="../img/ins.jpg">
	    				</div>
		    			<div class="card-content">
		      				<span class="card-title activator indigo-text text-darken-4">Card<i class="material-icons right">more_vert</i></span>
		      				<p>This is a link</p>
		    			</div>
		    			<div class="card-reveal">
		      				<span class="card-title grey-text text-darken-4">Card<i class="material-icons right">close</i></span>
		      				<p></p>
		    			</div>
	  				</div>
				</div>
			</div>
		</section>
		<section class="row container" id="req">
			<div class="divider"></div><div class="section"><h1>Requisitos Estándar</h1></div><div class="divider"></div>
			<div class="row">
      			<div class="col s12 m12 l12">
        			<div class="card-panel grey accent-3">
			          	<span class="white-text">
				          	<h5 class="center-aling">
				          	Los requisitos específicos varían para cada tipo de beca. <br></h5>
				          	</h5>
			          	</span>
        			</div>
        			<h4><small>
	        			A continuación presentamos el flujo con respecto a la solicitud y aprobación
	        			de todo tipo de beca, donde todos los estudiantes interesados por optar a una 
	        			deberán: 
        			</small></h4>
        			<ul class="collection">
					    <li class="collection-item avatar">
					      	<i class="large material-icons circle">subject</i>
					      	<span class="title"><h5>Presentarse a retirar el formulario de solicitud</h5></span>
					      	<p>El cual provee la Unidad de Bienestar Estudiantil de la Universidad Gerardo Barrios.
					      	</p>
					    </li>
					    <li class="collection-item avatar">
					      	<i class="large material-icons circle">av_timer</i>
					      	<span class="title"><h5>En una fecha estipulada previamente</h5></span>
					      	<p>Que generalmente son días posteriores a las vacaciones de Agosto; durando un lapso de
					      	<b>siete días.</b>
					      	</p>
					    </li>
					    <li class="collection-item avatar">
					      	<i class="large material-icons circle">description</i>
					      	<span class="title"><h5>Realizar pruebas psicológicas</h5></span>
					    	<p>Que se llevan a cabo de forma presencial y conlleva a su respectiva
					    	entrevista.
					      	</p>
					    </li>
					    <li class="collection-item avatar">
					      	<i class="large material-icons circle">grade</i>
					      	<span class="title"><h5>Someterse al estudio socio-económico</h5></span>
					      	<p>El cual servirá de indicador a una <i>Comisión de Becas</i> para evaluar los casos
					      	prioritarios y decide el tipo, ya sea total o parcial.
					      	</p>
					    </li>
					</ul>
					<div class="card-panel indigo accent-3">
			          	<span style="">
				          	<p class="white-text center-aling">
				          	Puede descargar el formulario de inscripción y llevar los
				          	datos solicitados en él, a su validación en la Unidad de Bienestar Estudiantil,
				          	para verificar que sean válidos.
				          	</p>
			          	</span>
        			</div>
      			</div>
    		</div>			
		</section>
		<section class="row container">
			<div class="divider"></div><div class="section"><h1>Calendarización de Actividades</h1></div><div class="divider"></div>
			<div class="row">
				<div class="col">
					<blockquote>
						Haga click en la imagen para expandir
					</blockquote>
					<img class="materialboxed" width="650" src="../img/act.png">
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