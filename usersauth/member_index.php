<?php
	require_once('auth.php');
?>

<html>
<head>
<title>Member Index</title>
</head>
<body>
<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<a href="member_profile.php">My Profile</a> | <a href="logout.php">Logout</a>
<p>This is a password protected area only accessible to members. </p>
</body>
</html>
