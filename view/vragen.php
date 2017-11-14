<?php include '../model/db/MySQLConnection.php';?>
<?php
//set questionnumber
$number = (int) $_GET['n'];

//get question
$query = "SELECT * FROM `question` WHERE question_number = $number";

//get result
$result = $mysqli->query($query) or die ($mysqli->error.__LINE__);

$question = $result->fetch_assoc();

//get choices
$query = "SELECT * FROM `choices` WHERE question_number = $number";

//get results
$choices = $mysqli->query($query) or die ($mysqli->error.__LINE__);
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Intake Vragenlijst</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
    <header>
    <div class="container">
        <h1> Intake vragenlijst</h1>
        </div>
    </header>
    <main>
    <div class="container">
        <div class="current"><?php echo "Vraag ".$question['question_number']; ?></div>
        <p class="question"><?php echo $question['text'];?></p>
        <form method="post" action="../controller/process.php">
        <ul class="choices">
            <?php while($row = $choices->fetch_assoc()):?>
            <li> <input name="choice" type="radio" value="<?php echo $row['id'];?>"><?php echo $row['text']?></li>
            <?php endwhile; ?>
            
            </ul>
            <input type="submit" value="submit">
            <input type="hidden" name="number" value="<?php echo $number;?>">
        </form>
        </div>
    </main>
    <footer>
    <div class="container">
        Comaker project Team 6
        </div>
    </footer>
    
    </body>