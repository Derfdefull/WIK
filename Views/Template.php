<!doctype html>
<html lang="en">
<head>
  <title>KiwiDreamers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie-edge">
  <link rel="icon" href="./img/Favicon.png">
  <link rel="stylesheet" href="./Source/CSS/bootstrap-grid.css">
  <link rel="stylesheet" href="./Source/CSS/Styles.css">
</head>

  <body>
    <div  class="row">

      <!--      Header    -->
      <div class="col-12">
        <?php include_once './Views/Header.php'; ?>
      </div>
      
    <!--      Particles && Content   -->
    <div class="col-12">
        <div class="container-fluid Particlebg" >
          <?php include_once './Views/Particles.php'; ?>  
        </div> 
    </div>

      
    <!--      Footer     -->
      <div class="col-12">
        <?php include_once './Views/Footer.php'; ?>
      </div>
    </div>


    <!--      Navigation Mobile     -->
    <div class="d-flex d-md-none NavMobile"> 
        <nav>  
          <ul>
          <li><a href=""> <img src="./img/contract.png" />Registrate </a></li>
          <li><a href=""> <img src="./img/customer.png" /> Servicios </a></li>
          <li><a href=""> <img src="./img/customer-service.png" /> Contáctanos </a></li>
          <li><a href=""> <img src="./img/about-us.png" /> Acerca de </a></li>
          </ul>
        </nav>
    </div>

  </body>
</html>
