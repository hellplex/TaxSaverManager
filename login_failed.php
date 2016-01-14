<?php 
  $pageName = "Login Failed"; 
  include './include/header.php';
	
	// remove all session variables
	session_unset(); 
	// destroy the session 
	session_destroy();

	include './include/session_control.php';
?>

<p align="center">&nbsp;</p>
<h4 align="center" class="err">
	Login Failed!<br />
 	Please check your username and password
</h4>
<p align="center">Click here to <a href="index.php">Login</a></p>

<?php  include './include/footer.php' ?>
