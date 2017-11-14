<?php include '../model/db/connect.php';?>
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
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="http://wenzhixin.net.cn/p/bootstrap-table/src/bootstrap-table.css" rel="stylesheet" type="text/css" />

    <link href="http://cdn.kendostatic.com/2014.1.318/styles/kendo.common.min.css" rel="stylesheet" />
    <link href="http://cdn.kendostatic.com/2014.1.318/styles/kendo.bootstrap.min.css" rel="stylesheet" />
    <link href="http://protostrap.com/Assets/gv/css/gv.bootstrap-form.css" rel="stylesheet" type="text/css" />

</head>
<body>


    <header>
    <div class="container">
        <h1> </h1>
        </div>
		</header>
		

   <div class="container-fluid">
        <div class="row">
		<div class="col-md-12"><div class="form-group">
        <label class="control-label control-label-left col-sm-3"><?php echo "Vraag ".$question['question_number']; ?>
        <p class="question"><?php echo $question['text'];?></p></label>
		<form method="post" action="../controller/process.php">

		<div class="controls col-sm-9">
        <ul class="choices">
            <?php while($row = $choices->fetch_assoc()):?>
            <li> <input name="choice" type="radio" value="<?php echo $row['id'];?>"><?php echo $row['text']?></li>
            <?php endwhile; ?>
			
							</div>
							</div>
							
			<div class="controls col-sm-9">
            <div class="form-group">
            </ul>
			
            <button id="button" class="btn btn-default" value="submit">Submit</button>
            <input type="hidden" name="number" value="<?php echo $number;?>">
			
			</div>
			</div>
        </form>
        </div>
	</div>
	
    <footer>
    <div class="container">
        Comaker project Team 6
        </div>
    </footer>
	 <script src="http://cdn.kendostatic.com/2014.1.318/js/jquery.min.js"></script>
    <script src="http://protostrap.com/Assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://wenzhixin.net.cn/p/bootstrap-table/src/bootstrap-table.js" type="text/javascript"></script>

    <script src="http://protostrap.com/Assets/inputmask/js/jquery.inputmask.js" type="text/javascript"></script>
    <script src="http://cdn.kendostatic.com/2014.1.318/js/kendo.all.min.js"></script>
    <script src="http://protostrap.com/Assets/parsely/parsley.extend.js" type="text/javascript"></script>
    <script src="http://protostrap.com/Assets/parsely/2.0/parsley.js" type="text/javascript"></script>
    <script src="http://protostrap.com/Assets/download.js" type="text/javascript"></script>
    <script src="http://protostrap.com/Assets/protostrap.js" type="text/javascript"></script>
    
    </body>