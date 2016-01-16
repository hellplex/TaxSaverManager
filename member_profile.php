<?php
	$pageName = "Member profile"; 
	include './include/header.php';
	include './include/session_control.php';

  	//Include database connection details
  	require_once './include/config.php';
  	include './include/functions.php';
?>

<?php 
// Checking if user is not authenticated display a message with link to home
if (!$logged) { 
?>

	<p>
		Sorry you are not logged! 
		<a href="index.php">Please go to index</a>
	</p>


<?php }
// If user is authenticated show database content
else {
?>
	<br/><br/>
	<a href="member_index.php">Home</a> | <a href="logout.php">Logout</a>
	<p>This is another secure page. </p>

	<p>THIS USER REQUESTS and ask if 0116 is booked by user:</p>

<?php

	displayUserResquests();

	checkMonth("0116");


} ?>

<?php  include './include/footer.php' ?>