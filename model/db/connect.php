<?php
/*DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'root');
DEFINE ('DB_NAME', 'questionnaire'); 
 
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('could not connect to the database because: '. mysqli_connect_error );*/

$db_host = 'localhost';
$db_name = 'questionnaire';
$db_user = 'root';
$db_pass = '';

//mysqli object 
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

//Error
if ($mysqli -> connect_error){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


















?>