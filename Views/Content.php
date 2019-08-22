<?php include_once './Source/Styles.php'; ?>
<div class="bd-example bg-light">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/LogoKIWI.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/LogoKIWI.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/LogoKIWI.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- ******************************************************************************************************** -->





<!--     Contenido Superior     
<div class="row border-top">
	<div class="col-md-4 col-sm-4 d-none d-md-block">

	</div>

	<div class="col-12 col-sm-12 col-md-4">
		<img style="width: inherit; height: inherit; " alt="KiwiDreams.Logo" src="./img/lel.png">
	</div>

	<div class="col-md-4 col-sm-4  d-none d-md-block">

	</div>
	<div class="col-12">
		<div class="container">
			<div style="margin:0 auto;width:70%;height:200px;border:1px solid #000">
				<div id="contenedor_superior" style="width:100%;height:10%;border-bottom:1px solid #000;">

				</div>
				<div id="contenedor_inferior" style="width:100%;height:20%;"></div>

			</div>
			<br>
		</div>
	</div>
</div>-->
<!--      Tarjetas     

<div class="row card-group">
	 <?php
	$Description = array('Servicios Tecnico en Computadoras', 'Tecnico Electricista', 'Futuros Servicios');
	$Details = array(
		'Reparacion de Computadoras \n Instalacion de Sistemas \n Limpieza',
		'Instalaciones \n Reparacion de Fusibles \n Alta tension',
		'<a href="#" > ¡Proponer una idea! </a>'
	);

	for ($i = 0; $i < 3; $i++) { ?>
		<div class="col-12 col-sm-4 m-0 p-0">
			<div class="card">
				<img width="inherit" height="450px" width="180px" src="./img/Cards/CardImg<?php echo $i + 1; ?>.jpg" class="card-img" alt="">
				<div class="card-body">
					<h5 class="card-title"><?php echo $Description[$i]; ?></h5>
					<p class="card-text"><?php echo $Details[$i]; ?></p>
				</div>
				<div class="card-footer" style="background-color: indigo">
					<small class="text-muted">Saber más.</small>
				</div>
			</div>
		</div>
	<?php } ?>
</div>--> 