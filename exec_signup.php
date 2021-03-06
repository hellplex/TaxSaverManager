<?php
	//Start session
	session_start();
	//Include database connection details and conntect to Database
	require_once('include/config.php');
	include './include/connect_db.php';
	
	function clean($str, $connection) {
		return $connection->real_escape_string($str);
	}
	
	//Sanitize the POST values
	$usr_email = clean($_POST['usr_email'],$conn);
	$usr_password = clean($_POST['usr_password'],$conn);
	$cpassword = clean($_POST['cpassword'],$conn);
	$usr_firstName = clean($_POST['usr_firstName'],$conn);
	$usr_lastName = clean($_POST['usr_lastName'],$conn);
	$usr_travelCardId = clean($_POST['usr_travelCardId'],$conn);
	$usr_departmentId = clean($_POST['usr_departmentId'],$conn);
	$usr_isAdmin = clean($_POST['usr_isAdmin'],$conn);

	
	//Input Validations
	if($usr_email == '') {
		$errmsg_arr[] = 'Email missing';
		$errflag = true;
	}
	if($usr_password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($cpassword == '') {
		$errmsg_arr[] = 'Confirm password missing';
		$errflag = true;
	}
	if( strcmp($usr_password, $cpassword) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}


	if($usr_firstName == '') {
		$errmsg_arr[] = 'First name missing';
		$errflag = true;
	}
	if($usr_lastName == '') {
		$errmsg_arr[] = 'Last name missing';
		$errflag = true;
	}
	if($usr_travelCardId == '') {
		$errmsg_arr[] = 'Travel card missing';
		$errflag = true;
	}
	if($usr_departmentId == '') {
		$errmsg_arr[] = 'Department ID missing';
		$errflag = true;
	}

	/*
	if($usr_isAdmin == '') {
		$errmsg_arr[] = 'Admin missing';
		$errflag = true;
	}
	*/

	
	//Check for duplicate email
	$query = "SELECT * FROM txs_user WHERE usr_email='$usr_email'";
	$result = $conn->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);
	
	if($result->num_rows != 0) {
		$errmsg_arr[] = 'Login ID already in use';
		$errflag = true;
	}


	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: form_signup.php");
		exit();
	}

	//Create INSERT query
	$query = "INSERT INTO txs_user(usr_email, usr_password, usr_firstName, usr_lastName, usr_travelCardId, usr_departmentId, usr_isAdmin) VALUES('$usr_email','".md5($_POST['usr_password'])."','$usr_firstName','$usr_lastName','$usr_travelCardId','$usr_departmentId','$usr_isAdmin')";
	$result = $conn->query($query);
	if (!$result) die ("Database access failed: " . $conn->error);
	//Check whether the query was successful or not
	header("location: ./success_register.php");
	
?>















