<?php 

include ("../include/header.php");
if (isset($_SESSION['user']))
    {
    header("Location: http:://localhost/githubtest/vragenlijst/view/index.php");
    }
//Account activeren
if ( isset($_GET['active'])|| isset($_GET['submit']))
    {
    $tk = isset($_POST['submit']) ? $_POST['active'] : $_GET['active'];
    $id = isset($_POST['submit']) ? $_POST['id'] : $_GET['id'];
    
//Code activeren
    $user->activate($id, $tk);   
    }
?>