<?php
include ("../include/header.php");

if (isset($_SESSION['user']))
    {
    header("Location: http://localhost/githubtest/vragenlijst/view/index.php");
    }
//authenticatie functie van de class User uitvoeren bij het submitten. Controleren van inloggegevens
if (isset($_POST['submit']))
    {
    $user->auth($_POST['email'], $_POST['password']);
    }
?>