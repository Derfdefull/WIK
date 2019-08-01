<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    body{
      
      font-size: 20px;
      font-family: Arial, Helvetica, sans-serif;
      max-width:100%;
      overflow-x:hidden;
    }
  </style>
  </head>
  <body class="font-weight-bold">
<!--      Header    -->
        <div class="col-12">
        <?php include_once './Views/Header.php'; ?>
        </div>
    <div class="row" style="margin-left:5%; margin-right:5%;">
      <!--      Content    -->
      <div class="col-12 grid-size" style="top:4%; background-color: #8F3985;">
        <?php include_once './Views/Content.php'; ?>
        </div>

        <!--      Template    
        <div class="col-12">
        <?php include './Views/Template.php'; ?>
        </div>-->

        <div class="col-12" style="top:4%">
        <?php include_once './Views/Footer.php'; ?>
        </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>