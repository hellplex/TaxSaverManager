<?php
	$pageName = "Member index"; 
	include './include/header.php';
	include './include/session_control.php';
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

	<h1>Welcome 
		<?php echo $_SESSION['SESS_FIRST_NAME'];?> 
		<?php echo $_SESSION['SESS_LAST_NAME'];?>
		 whose email is 
		<?php echo $_SESSION['SESS_MEMBER_ID'];?>

	</h1>
	<a href="member_profile.php">My Profile</a> | <a href="logout.php">Logout</a>
	<p>This is a password protected area only accessible to members. </p>

<?php } ?>

<?php  include './include/footer.php' ?>