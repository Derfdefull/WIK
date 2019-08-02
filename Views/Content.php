<style>
*{
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

body{
  background: #1D1F20;
}

.wrap{
	width: 1100px;
	margin: 50px auto;
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-webkit-justify-content: center;
	-ms-flex-pack: center;
	justify-content: center;
}

.tarjeta-wrap{
	margin: 10px;
	-webkit-perspective: 800;
	perspective: 800;
}

.tarjeta{
	width: 300px;
	height: 350px;
	background-image: url("./img/Tcompu1.jpg");
	position: relative;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
	-webkit-transition: .7s ease;
	transition: .7s ease;
	-webkit-box-shadow: 0px 10px 15px -5px rgba(0,0,0,0.65);
	box-shadow: 0px 10px 15px -5px rgba(0,0,0,0.65);

}
.tarjeta2{
	width: 300px;
	height: 350px;
	background-image: url("./img/Telectri.gif");
	position: relative;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
	-webkit-transition: .7s ease;
	transition: .7s ease;
	-webkit-box-shadow: 0px 10px 15px -5px rgba(0,0,0,0.65);
	box-shadow: 0px 10px 15px -5px rgba(0,0,0,0.65);

}
.tarjeta3{
	width: 300px;
	height: 350px;
	background-image: url("./img/cursos1.png");
	position: relative;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
	-webkit-transition: .7s ease;
	transition: .7s ease;
	-webkit-box-shadow: 0px 10px 15px -5px rgba(0,0,0,0.65);
	box-shadow: 0px 10px 15px -5px rgba(0,0,0,0.65);

}


.adelante, .atras{
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.adelante{
	width: 100%;
}

.atras{
	-webkit-transform: rotateY(180deg);
	transform: rotateY(180deg);

	padding: 15px;
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-webkit-justify-content: center;
	-ms-flex-pack: center;
	justify-content: center;
	-webkit-box-align: center;
	-webkit-align-items: center;
	-ms-flex-align: center;
	align-items: center;

	text-align: center;
	color: #fff;
	font-family: "open sans";
  background: indigo;
}

.tarjeta-wrap:hover .tarjeta{
	-webkit-transform: rotateY(180deg);
	transform: rotateY(180deg);
}
.tarjeta-wrap:hover .tarjeta2{
	-webkit-transform: rotateY(180deg);
	transform: rotateY(180deg);
}
.tarjeta-wrap:hover .tarjeta3{
	-webkit-transform: rotateY(180deg);
	transform: rotateY(180deg);
}

.card1{
	background-image: url(http://1.1m.yt/J9Kw7kl.jpg);
	background-size: cover;
}

.card2{
	background-image: url(http://1.1m.yt/dlxMf3R.jpg);
	background-size: cover;
}

.card3{
	background-image: url(http://3.1m.yt/EUB_xE.jpg);
	background-size: cover;
}
</style>

<!--     Contenido Superior     -->  
<div class="row border-top">
<div class="col-md-4 d-none d-md-block">

</div>

<div class="col-12 col-md-4">
	<img height="200px" alt="" src="./img/lel.png">
</div>

<div class="col-md-4 d-none d-md-block">

</div>
	<div class="col-12">
		<div class="container">
		<div style="margin:0 auto;width:70%;height:200px;border:1px solid #000">
			   <div id="contenedor_superior" style="width:100%;height:10%;border-bottom:1px solid #000;">
			 
			   </div>
			   <div id="contenedor_inferior" style="width:100%;height:20%;"></div>
		   
		   </div>
 <br>

 <!--      Tarjetas     -->  
 <!--      n1     -->  
 <div class="wrap">
		<div class="tarjeta-wrap">
			<div class="tarjeta">
				<div class="adelante card1" ></div>
				<div class="atras">
					<p><strong>Servicio Tecnico en computadoras</strong></p>
				</div>
			</div>
		</div>
    <!--      n2     -->  
		<div class="tarjeta-wrap">
			<div class="tarjeta2">
				<div class="adelante card2"></div>
				<div class="atras">
        <p><strong>Servicio Tecnico Electricista</strong></p>
				</div>
			</div>
		</div>
    <!--      n3     -->  
		<div class="tarjeta-wrap">
			<div class="tarjeta3">
				<div class="adelante card3"></div>
				<div class="atras">
        <p><strong>Muchos servicios mas en un futuro</strong></p>
				</div>
			</div>
		</div>
	</div>
</div>

		</div>
	</div>
</div>


