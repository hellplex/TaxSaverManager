<?php
	$pageName = "Member profile"; 
	include './include/header.php';
	include './include/session_control.php'
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

<?php } ?>

<?php  include './include/footer.php' ?>