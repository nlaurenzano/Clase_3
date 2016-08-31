<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Aplicación 25</title>
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Aplicación 25</h1><span>Superficie de un rectángulo</span>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Ingreso de datos</h1>
    <form method="post">
      <div class="input-container">
        <input type="text" id="lado1" name="lado1" required="required"/>
        <label for="lado1">Lado 1</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="lado2" name="lado2" required="required"/>
        <label for="lado2">Lado 2</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit"><span>Calcular</span></button>
      </div>
      <br />
      <div class="input-container">
        <input type="text" id="superficie" name="superficie"
        value="<?php
          if (isset($_POST['lado1']) && isset($_POST['lado2'])) {
            // Calcula la superficie
            $sup = $_POST['lado1'] * $_POST['lado2'];
            echo $sup;
          }
          ?>"/>
        <label for="superficie">Superficie</label>
        <div class="bar"></div>
      </div>
    </form>
  </div>

</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
    
  </body>
</html>

