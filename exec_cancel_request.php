<?php	
	include './include/connect_db.php';
	
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
  
	echo "<div class=\"alert alert-success fade in\" style=\"margin-top:18px;\">
	<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
    <strong>Success!</strong> The request was cancelled.
	</div>";

	$result = $conn->query($query);
	if (!$result) die ("Database access failed: " . $conn->error);
	
?>