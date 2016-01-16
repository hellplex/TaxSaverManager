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
	
/*
Table txs_ticket_type
Form updateTicketType
*/
	//Sanitize the POST values
	$ticket_name = clean($_POST['ticket_name'],$conn);
	$ticket_gross = clean($_POST['ticket_gross'],$conn);
	$ticket_net1 = clean($_POST['ticket_net1'],$conn);
	$ticket_net2 = clean($_POST['ticket_net2'],$conn);
	$ticket_shortDescript = clean($_POST['ticket_shortDescript'],$conn);
	$ticket_longDescript = clean($_POST['ticket_longDescript'],$conn);
	$ticket_categories = clean($_POST['ticket_categories'],$conn);
	
	//Input Validations
	if($ticket_name == '') {
		$errmsg_arr[] = 'Ticket_name missing';
		$errflag = true;
	}
	if($ticket_gross == '') {
		$errmsg_arr[] = 'Gross price missing';
		$errflag = true;
	}
	if($ticket_net1 == '') {
		$errmsg_arr[] = 'Net 1 missing';
		$errflag = true;
	}
	if($ticket_net2 == '') {
		$errmsg_arr[] = 'Net 2 missing';
		$errflag = true;
	}
	if($ticket_shortDescript == '') {
		$errmsg_arr[] = 'Short description missing';
		$errflag = true;
	}
	if($ticket_longDescript == '') {
		$errmsg_arr[] = 'Long description missing';
		$errflag = true;
	}
	if($ticket_categories == '') {
		$errmsg_arr[] = 'Category not selected';
		$errflag = true;
	}
	
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: form_update_info.php");
		exit();
	}

	//Create INSERT query
	$query = "INSERT INTO txs_ticket_type(ticket_name,ticket_gross,ticket_net1,ticket_net2,ticket_shortDescript,ticket_longDescript,tcktcat_id) 
	VALUES('$ticket_name','$ticket_gross','$ticket_net1','$ticket_net2','$ticket_shortDescript','$ticket_longDescript','$ticket_categories')";

	$result = $conn->query($query);
	if (!$result) die ("Database access failed: " . $conn->error);
	//Check whether the query was successful or not
	header("location: ./success_ticket.php");
	
?>
