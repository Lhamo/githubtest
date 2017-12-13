<?php 
session_start();

$current_url = $_SERVER['SERVER_NAME'].''.$_SERVER['REQUEST_URI'];

include ("include/userClass.php");
//nieuw gebruiker instantieren
$user = new User();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Homepage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <?php 
      //behalve bij activatie pagina toon navigatie bar
      if (strpos($current_url, "activate.php")=== false){
         include ("include/nav.php"); 
      }
      
      ?>