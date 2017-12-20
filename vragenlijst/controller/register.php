
<?php
include ("../include/header.php");

//Als een gebruiker al bestaat in session dan door verwijzen naar de homepage
/*if(isset($_SESSION['user']))
{
    header("Location: http://localhost:81/vragenlijst/index.php");
}
*/
//Als er op submit is gedrukt voer de registratie functie uit van de class User
if ( isset($_POST['submit']))
{
    $user->register($_POST);
}
?>  