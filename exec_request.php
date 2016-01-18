<?php	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die($conn->connect_error);
	
	//Sanitize the POST values
	$request_date_mmyy = clean($_POST['request_date_mmyy'],$conn);
	$usr_email = clean($_POST['usr_email'],$conn);
	$ticket_typeId = clean($_POST['ticket_typeId'],$conn);

	//Input Validations
	if($request_date_mmyy == '') {
		$errmsg_arr[] = 'Request date mmyy';
		$errflag = true;
	}
	if($usr_email == '') {
		$errmsg_arr[] = 'User email missing';
		$errflag = true;
	}
	if($ticket_typeId == '') {
		$errmsg_arr[] = 'Type of ticket missing';
		$errflag = true;
	}

	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}

	//Create INSERT query
	$query = "INSERT INTO txs_request(request_date_mmyy,usr_email,ticket_typeId) 
	VALUES('$request_date_mmyy','$usr_email','$ticket_typeId')";

	echo "<div class=\"alert alert-success fade in\" style=\"margin-top:18px;\">
	<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
    <strong>Success!</strong> The request was registered correctly.
	</div>";

	$result = $conn->query($query);
	if (!$result) die ("Database access failed: " . $conn->error);
	
?>