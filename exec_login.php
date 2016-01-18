<?php
	//Start session
	session_start();
	//Include database connection details and conntect to Database
	require_once('include/config.php');
	include './include/connect_db.php';
	include './include/functions.php';
	
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
		header("location: login_failed.php");
		exit();
	}
	
	//Create query
	$query="SELECT * FROM txs_user WHERE usr_email='$usr_email' AND usr_password='".md5($_POST['usr_password'])."'";
	$result = $conn->query($query);
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