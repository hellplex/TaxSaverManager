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
	
	//Create query
	$qry="SELECT * FROM txs_ticket_category /*WHERE usr_email='$usr_email' AND usr_password='".md5($_POST['usr_password'])."'*/";
	$result = $conn->query($qry);
    if (!$result) die ("Database access failed: " . $conn->error);
	
	//Check whether the query was successful or not
	
	  /* 6. Repeat  */
	  for ($j = 0 ; $j < $rows ; ++$j)
	  {
	    $result->data_seek($j);
	    $row = $result->fetch_array(MYSQLI_NUM);

	    echo <<<_END
	  <pre>
	         ID $row[0]
	   Cat name $row[1]
	    Cat url $row[2]
	  </pre>
	  <form action="booksdbexample.php" method="post">
	  <input type="hidden" name="delete" value="yes">
	  <input type="hidden" name="isbn" value="$row[0]">
	  <input type="submit" value="DELETE RECORD"></form>
	_END;
	  }
	
?>