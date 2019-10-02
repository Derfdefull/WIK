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
      
  
    <!--      Slider   -->
    <div class="col-12">
        <div class="Particlebg" >
          <?php include_once './Views/Slider.php'; ?>  
        </div> 
    </div>


    <!--      Content   -->
    <div class="col-12">
        <div class="container-fluid Particlebg" >
          <?php include_once './Views/Content.php'; ?>  
        </div> 
    </div>

      
    <!--      Footer     -->
      <div class="col-12">
        <?php include_once './Views/Footer.php'; ?>
      </div>
    </div>

    <?php include_once './Views/MobNav.php'; ?>


  </body>
</html>
