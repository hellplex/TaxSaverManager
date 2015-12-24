<?php
	require_once('./include/auth.php');
	
	$pageName = "Member index"; 
	include './include/header.php';
?>

<h1>Welcome 
	<?php echo $_SESSION['SESS_FIRST_NAME'];?> 
	<?php echo $_SESSION['SESS_LAST_NAME'];?>
	 whose email is 
	<?php echo $_SESSION['SESS_MEMBER_ID'];?>

</h1>
<a href="member_profile.php">My Profile</a> | <a href="logout.php">Logout</a>
<p>This is a password protected area only accessible to members. </p>


<?php  include './include/footer.php' ?>
