<?php 
include ('config/config.php');

?>


<!DOCTYPE html PUBLIC/>

<head>
	<title>Project Survey</title>
	<link rel="stylesheet" type="text/css" href="default.css"/>
</head>

<body>
	<div class="wrapOverall">
	<div class="header"><?php head(); ?> </div>  <!--END header-->
	<div class="wrapContent">
	<div class="sideNav"><?php sideNav($dbc); ?></div><!--END sideNav-->
	<div class="content">

		<h2>Survey Name</h2>
		
		<?php getQuestions($dbc); // sandbox: pull list of questions ?>
		
		</div><!--END Content-->
</div><!--END wrapContent-->

<div class="footer"><?php footer();?></div>  <!--END footer-->

</div><!--END wrapOverall-->
</body>

</html>


<!--<div class="entry">
<h3 class="qTitle">Question 1:  </h3>
<form action="index.php" method="post">

	<input type="text"name="answer"size="85"/>
	<input type="submit" value="submit"name="submit"/>
	
	<input type="hidden"name="questionid" value="questionid"/>
	<input type="hidden"name="submitted" value="1"/>
</form>
	</div><!--END entry-->