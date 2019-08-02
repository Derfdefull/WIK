
 <?php include_once './Source/Styles.php'; ?>

<!--     Contenido Superior     -->  
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
</div>
 <!--      Tarjetas     -->  
				<div class="row">
					<div class="col-12 col-sm-4">
						<div class="wrap" style="color: indigo;">
							<?php 
							$Description = array('Servicios Tecnico en Computadoras', 'Tecnico Electricista', 'Futuros Servicios');
							$Details = array('Reparacion de Computadoras \n Instalacion de Sistemas \n Limpieza',
							'Instalaciones \n Reparacion de Fusibles \n Alta tension', 
							'<a href="#" > ¡Proponer una idea! </a>');
						for ($i = 0; $i < 3; $i++) { ?>
								<div class="tarjeta-wrap card-body">
									<div class="tarjeta" style="background-image: url(./img/Cards/CardImg<?php echo $i+1; ?>.jpg);">
										<div class="adelante" style="background-image: url(./img/Cards/CardImg<?php echo $i+1; ?>.jpg);" ></div>
										<div class="atras">
											<p> <strong> <?php echo $Description[$i]; ?> </strong></p>
										</div>
									</div>
									<br>
									<details>
										<summary>Saber más</summary>
										<p><?php echo $Details[$i]; ?></a>
									</details>
								</div>
						<?php } ?>
						</div>
					</div>
				</div>



