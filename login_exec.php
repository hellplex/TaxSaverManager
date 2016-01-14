<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('include/config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die($conn->connect_error);
	
	//Select database
	
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str, $connection) {
		return $connection->real_escape_string($str);
	}
	
	//Sanitize the POST values
	$usr_email = clean($_POST['usr_email'],$conn);
	$usr_password = clean($_POST['usr_password'],$conn);
	
	//Input Validations
	if($usr_email == '') {
		$errmsg_arr[] = 'Email missing';
		$errflag = true;
	}
	if($usr_password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login_form.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM txs_user WHERE usr_email='$usr_email' AND usr_password='".md5($_POST['usr_password'])."'";
	$result = $conn->query($qry);
    if (!$result) die ("Database access failed: " . $conn->error);
	
	//Check whether the query was successful or not
	
	if($result->num_rows == 1) {
			//Login Successful
		session_regenerate_id();
		$appuser = $result->fetch_array(MYSQLI_ASSOC);
		$_SESSION['SESS_MEMBER_ID'] = $appuser['usr_email'];
		$_SESSION['SESS_FIRST_NAME'] = $appuser['usr_firstName'];
		$_SESSION['SESS_LAST_NAME'] = $appuser['usr_lastName'];
		session_write_close();
			
			//echo $user['member_id'];
		header("location: index.php");
		exit();
	}else {
		//Login failed
		header("location: login_failed.php");
		exit();
	}
	
?>