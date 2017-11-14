<?php include '../model/db/connect.php'; ?>
<?php session_start();?>
<?php

if ($_POST){
$number = $_POST['number'];
$selected_choice = $_POST['choice'];
$next = $number+1;

// get total question
    $query = "SELECT * FROM `question`";
    $results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
    $total = $results->num_rows;
    //Get correct choice
   
if ($number == $total){
        
    $query = "SELECT * FROM `choices` WHERE question_number = $number AND id = $selected_choice";
    
    //get result 
    $result = $mysqli->query($query) or die ($mysqli->error.__LINE__);
    
    //get row
    
    $row = $result->fetch_assoc();
    echo $row['answer'];
    
 
   //header("Location: ../view/rapport.php");
     }
    else {
        header("Location: ../view/vragen.php?n=".$next);
    }
}

