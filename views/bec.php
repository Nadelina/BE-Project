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
		</section>
		<section class="row container">
			<div class="divider"></div><div class="section"><h1>Tipos</h1></div><div class="divider"></div>
			<div class="row">
				<div class="col s12 m4 l6">
					<div class="card z-depth-0">
	    				<div class="card-image waves-effect waves-block waves-light">
	      					<img class="activator" src="../img/aca.jpg">
	    				</div>
		    			<div class="card-content">
		      				<span class="card-title activator indigo-text text-darken-4">BCI<i class="material-icons right">more_vert</i></span>
		      				<p>Por desempeño académico y situación económica</p>
		    			</div>
		    			<div class="card-reveal">
		      				<span class="card-title grey-text text-darken-4">BCI<i class="material-icons right">close</i></span>
							<p class="flow-text">Este tipo de beca es otorgada a aquellos estudiantes que demuestren no poder continuar sus estudios
							por falta de recursos económicos y que además posean un <b>destacado desempeño académico demostrable con una nota mayor a 8.5 de Promedio.</b>. </p>
		    			</div>
	  				</div>
				</div>
				<div class="col s12 m4 l6">
					<div class="card z-depth-0">
	    				<div class="card-image waves-effect waves-block waves-light">
	      					<img class="activator" src="../img/emp.jpg">
	    				</div>
		    			<div class="card-content">
		      				<span class="card-title activator indigo-text text-darken-4">BCI<i class="material-icons right">more_vert</i></span>
		      				<p>De pre-grado al Personal Administrativo</p>
		    			</div>
		    			<div class="card-reveal">
		      				<span class="card-title grey-text text-darken-4">BCI<i class="material-icons right">close</i></span>
		      				<p class="flow-text">Consiste en la <b>exoneración de pago de cuotas y matrícula</b> al <i>personal administrativo</i> que
		      				labora en la Universidad.</p>
		    			</div>
	  				</div>
				</div>
				<div class="col s12 m4 l6">
					<div class="card z-depth-0">
	    				<div class="card-image waves-effect waves-block waves-light">
	      					<img class="activator" src="../img/fam.jpg">
	    				</div>
		    			<div class="card-content">
		      				<span class="card-title activator indigo-text text-darken-4">B-DH<i class="material-icons right">more_vert</i></span>
		      				<p>A familiares cercanos de empleados de la Universidad.</p>
		    			</div>
		    			<div class="card-reveal">
		      				<span class="card-title grey-text text-darken-4">B-DH<i class="material-icons right">close</i></span>
		      				<p class="flow-text">Puede otorgarse a los hijos de <b>empleados a tiempo completo</b> de la Universidad Gerardo Barrios
							   , a los cuales se les exonera tanto de <b>pago de cuotas y matrícula</b> como <b>proceso de graduación
							   vigente y derecho a la misma.</b><br><br> Ésta beca puede otorgarse en igualdad de beneficios a un 
							   <i>hermano o sobrino</i> en caso que el empleado no tenga hijos.
		      				</p>
		    			</div>
	  				</div>
				</div>
				<div class="col s12 m4 l6">
					<div class="card z-depth-0">
	    				<div class="card-image waves-effect waves-block waves-light">
	      					<img class="activator" src="../img/par.jpg">
	    				</div>
		    			<div class="card-content">
		      				<span class="card-title activator indigo-text text-darken-4">B-DH<i class="material-icons right">more_vert</i></span>
		      				<p>A cónyuge o compañero/a de vida de los empleados</p>
		    			</div>
		    			<div class="card-reveal">
		      				<span class="card-title grey-text text-darken-4">B-DH<i class="material-icons right">close</i></span>
		    				<p class="flow-text">La Universidad Gerardo Barrios otorga <i>media beca</i> al cónyuge o compañero/a de vida de sus empleados
		    				a tiempo completo, exonerándolo del <b>50% del pago de cuotas , matrícula, proceso de graduación vigente
		    				y graduación.</b></p>
		    			</div>
	  				</div>
				</div>
				<div class="col s12 m4 l6">
					<div class="card z-depth-0">
	    				<div class="card-image waves-effect waves-block waves-light">
	      					<img class="activator" src="../img/ins.jpg">
	    				</div>
		    			<div class="card-content">
		      				<span class="card-title activator indigo-text text-darken-4">BCI-CI<i class="material-icons right">more_vert</i></span>
		      				<p>Otorgadas por medio de convenios con diversas instituciones</p>
		    			</div>
		    			<div class="card-reveal">
		      				<span class="card-title grey-text text-darken-4">BCI-CI<i class="material-icons right">close</i></span>
		      				<p class="flow-text">La Universidad ofrece éste tipo de becas a <b>Instituciones de Educación Media, Alcaldías, Empresas
		      				y Organizaciones No Gubernamentales (ONG) </b>a través de <i>convenios</i> que busquen beneficiar a jóvenes
		      				de escasos recursos económicos y destacado rendimiento académico.</p>
		    			</div>
	  				</div>
				</div>
			</div>
		</section>
		<section class="row container" id="req">
			<div class="divider"></div><div class="section"><h1>Requisitos Estándar</h1></div><div class="divider"></div>
			<div class="row">
      			<div class="col s12 m12 l12">
	      			<div class="row">
	        			<div class="col s12 m3">
	          				<div class="card red darken-1">
	            				<div class="card-content white-text">
	              					<span class="card-title">Nota: </span>
	              					<p>Los requisitos específicos varían para cada tipo de beca</p>
					            </div>
					        </div>  
					    </div>
					    <div class="col s12 m9">
					    	<blockquote>
								<p class="title black-text flow-text">
			        			Todos los estudiantes interesados por optar a una beca
			        			deberán:
		        				</p>
							</blockquote>
					    </div>
					</div>
        			<ul class="collection collapsible popout hoverable" data-collapsible="accordion">
					    <li class="collection-item avatar">
						    <div class="collapsible-header active">
						    <i class="material-icons circle black">subject</i>
						    <span class="title black-text"><h5><br>Presentarse a retirar el formulario de solicitud</h5></span>
						    </div>
						    <div class="collapsible-body">
						    	<p>El cual provee la Unidad de Bienestar Estudiantil de la Universidad Gerardo Barrios.</p>
						    </div>
						</li>
						<li class="collection-item avatar">
						    <div class="collapsible-header">
						    <i class="material-icons circle black">av_timer</i>
						    <span class="title black-text"><h5><br>En una fecha determinada previamente</h5></span>
						    </div>
						    <div class="collapsible-body">
						    	<p>Que generalmente -textson días posteriores a las vacaciones de Agosto; durando un lapso de
					      	<b>siete días.</b></p>
						    </div>
						</li>
						<li class="collection-item avatar">
						    <div class="collapsible-header">
						    <i class="material-icons circle black">description</i>
						    <span class="title black-text"><h5><br>Realizar pruebas psicológicas</h5></span>
						    </div>
						    <div class="collapsible-body">
						    	<p>Que se llevan a cabo de forma presencial y conlleva a su respectiva entrevista.</p>
						    </div>
						</li>
						<li class="collection-item avatar">
						    <div class="collapsible-header">
						    <i class="material-icons circle black">grade</i>
						    <span class="title black-text"><h5><br>Someterse al estudio socio-económico</h5></span>
						    </div>
						    <div class="collapsible-body">
						    	<p>El cual servirá de indicador a una <i>Comisión de Becas</i> para evaluar los casos
					      	prioritarios y decide el tipo, ya sea total o parcial.</p>
						    </div>
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
		<section class="row container" id="comp">
			<div class="divider"></div><div class="section"><h1>Compromisos del becado</h1></div><div class="divider"></div>
			<div class="row">
				
			</div>
		</section>
		<section class="row container">
			<div class="divider"></div><div class="section"><h1>Calendarización de Actividades</h1></div><div class="divider"></div>
			<div class="row">
				<div>
					<blockquote>
						<h4>Haga click en la imagen para expandir</h4>
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