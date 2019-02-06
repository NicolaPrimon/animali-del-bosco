<?php 
$vedi_lista = $_GET ["lista"];
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>Ciao mondo</title>
</head>
 <body>
 
  <?php
 if ( $vedi_lista =="si"){
  ?> 
 <ul>
 <?php
  $a=["arancia", "banana", "mango" , "ananas" , "kiwi"];
   foreach ($a as $nome) {
    print "<li>" . $nome . "</li>";
  }
 ?>
 </ul>
 <?php
  } 
  ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>