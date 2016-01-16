<?php

/*  Display a select of ticket categories  */
function displaySelectCat() {
  //Array to store validation errors
  $errmsg_arr = array();

  //Validation error flag
  $errflag = false;

  //Connect to mysql server
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die($conn->connect_error);
 
  /* Query database for ticket categories */
  $query = "SELECT * FROM txs_ticket_category";  
  $result = $conn->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);


  $rows = $result->num_rows;
  
  echo "<select name=\"ticket_categories\">";
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);

    echo <<<_END
    <option value="$row[0]">$row[1]</option>
_END;
  }
  echo "</select>";
  $result->close();
  $conn->close();
}



/* function to escape db values for security */
function clean($str, $connection) {
	return $connection->real_escape_string($str);
}



//Sanitize and fill categories values from post 
function getPostCategories() {
	if(isset($_POST['tcktcat_id']) && isset($_POST['tcktcat_url']) && isset($_POST['tcktcat_url'])){
		$tcktcat_id = clean($_POST['tcktcat_id'],$conn);
		$tcktcat_name = clean($_POST['tcktcat_name'],$conn);
		$tcktcat_url = clean($_POST['tcktcat_url'],$conn); 
	}
}

?>