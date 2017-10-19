<?php

//SURVEY QUESTIONS

function getQuestions($dbc){
	
	$query = "SELECT * FROM survey_question" ;
	$result = @mysqli_query($dbc, $query);
	
	if ($result){
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$body = $row['question_body'];
			
			echo '
					<div class="entry">
		<h3 class="qTitle">'.$body.':  </h3>
		<form action="index.php" method="post">
		
			<input type="text"name="answer"size="85"/>
			<input type="submit" value="submit"name="submit"/>
			
			<input type="hidden"name="questionid" value="questionid"/>
			<input type="hidden"name="submitted" value="1"/>
		</form>
			</div><!--END entry-->
			
			';
		
		}		
	
	}
}


?>