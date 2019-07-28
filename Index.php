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
    background-color: #8F3985;
  }
  </style>
  </head>
  <body>

  <!--      Header    -->
  <?php
    include_once './Views/Header.php';
    include_once './Views/Content.php';
  ?>


  <!--<div class="w-25 card text-white bg-primary">
    <img class="card-img-top" width="100px" height="300px" src="./img/kiwi.png" alt="">
    <div class="card-body">
      <h4 class="card-title">Kiwi Dreamers</h4>
      <p class="card-text">Ekisde</p>
    </div>
  </div>-->

  <ul class="nav justify-content-center">
      <li class="nav-item">
          <a class="nav-link active" href="index.php?Action=Botones">Botones</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="index.php?Action=Saludo">Hola Mundo</a>
      </li>
  </ul>
      <?php 
      include './Views/Template.php';
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>