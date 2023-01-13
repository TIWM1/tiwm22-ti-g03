<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarecos do ISMIAU</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
include "header.php"
?>
<div class="banner">
<img src="images/banner.jpg" alt="banner" style="width:100%;">


<h1 style="text-align:center">AS NOSSAS INSTALAÇÕES</h1>
<div class="container">
  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/gatos/gato1.jpg" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="images/gatos/gato2.jpg" style="width:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="images/gatos/gato3.jpg" style="width:100%" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="images/gatos/gato4.jpg" style="width:100%" onclick="currentSlide(4)">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/gatos/gato5.jpg" style="width:100%" onclick="currentSlide(5)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="images/gatos/gato6.jpg" style="width:100%" onclick="currentSlide(6)" >
    </div>
  </div>
</div>


<br>
<?php
include "footer.php"
?>
 <script type="text/javascript" src="slider.js"></script>
</body>


</html>
