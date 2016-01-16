<?php
	//Start session and functions include
	session_start();
	require_once('./include/functions.php');

	//Include database connection details
	require_once('./include/config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die($conn->connect_error);
	
	//Sanitize the POST values
	$tcktcat_name = clean($_POST['tcktcat_name'],$conn);
	$tcktcat_url = clean($_POST['tcktcat_url'],$conn);

	//Input Validations
	if($tcktcat_name == '') {
		$errmsg_arr[] = 'Category name missing';
		$errflag = true;
	}
	if($tcktcat_url == '') {
		$errmsg_arr[] = 'Gross price missing';
		$errflag = true;
	}

	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: form_update_ticketcat.php");
		exit();
	}

	//Create INSERT query
	$query = "INSERT INTO txs_ticket_category(tcktcat_name,tcktcat_url) 
	VALUES('$tcktcat_name','$tcktcat_url')";

	$result = $conn->query($query);
	if (!$result) die ("Database access failed: " . $conn->error);
	//Check whether the query was successful or not
	header("location: ./success_category.php");
	
?>