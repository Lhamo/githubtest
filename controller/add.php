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
       <h2>Vraag toevoegen</h2>
        <form method="post" action="add.php">
        <p>
            <label>Vraag nummer:</label>
            <input type="number" name="question_number">
            </p>
        <p>
            <label>Vraag:</label>
            <input type="text" name="question_text">
            </p>
        <p>
            <label>Keuze 1:</label>
            <input type="text" name="choice1">
            </p>
            <p>
            <label>Keuze 2:</label>
            <input type="text" name="choice2">
            </p>
        <p>
            <label>Keuze 3:</label>
            <input type="text" name="choice3">    
            </p>
        <p>
            <label>Keuze 4:</label>
            <input type="text" name="choice4">    
            </p>
            <p>
            <input type="button" name="submit" value="submit"></p>
        </form>
        </div>
    </main>
    <footer>
    <div class="container">
        Comaker project Team 6
        </div>
    </footer>
    
    </body>