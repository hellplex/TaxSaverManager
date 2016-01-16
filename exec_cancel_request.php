<?php	
	echo "<h2 style=\"color:red;\">deleted</h2>";
?>

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

	//Input Validations
	if($request_date_mmyy == '') {
		$errmsg_arr[] = 'Request date mmyy';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}

	//Create DELETE query
    $query  = "DELETE FROM txs_request WHERE request_date_mmyy='$request_date_mmyy'";
    $result = $conn->query($query);
  	if (!$result) echo "DELETE failed: $query<br>" .
      $conn->error . "<br><br>";

	echo "<h1>Deleted successful</h1>";

	$result = $conn->query($query);
	if (!$result) die ("Database access failed: " . $conn->error);
	
?>