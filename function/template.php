<?php

//HEADER FUNCTIONS

function head(){

	echo '<h2 class="siteTitle">Survey 2017</h2>';	
	
}

//FOOTER FUNCTIONS

function footer(){

	echo '<p><a href="admin/index.php">Admin Panel</a></p>';
	
}

//SIDENAV FUNCTIONS

function sideNav($dbc){
	
	
	echo '
	<ul>
			<li><a href="#">Survey 1</a></li>
			<li><a href="#">Survey 1</a></li>
			<li><a href="#">Survey 1</a></li>
		</ul>
	
	
	';
	
}




?>