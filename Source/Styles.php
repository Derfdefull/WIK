<style>
*{
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.Content{
	
	padding-left: 10%;
	padding-right: 10%;
}

body, html{
 	
	background-color:rgba(255,0,0, 0.4);
	font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    max-width:100%;
    overflow-x:hidden;
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
	width: auto	;
	height: 350px;
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


    .links{
      color: white;
    }
    .links:hover {
      color: indigo;
      text-shadow: 1px 2px 2px white;
      text-decoration: none;
    }


</style>