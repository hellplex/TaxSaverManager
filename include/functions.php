<?php

/*  

  INDEX OF FUNCTIONS IN THIS FILE

  - displaySelectCat()
  - displaySelectTicket() 
  - displayTicketTypes()
  
  - displayUserResquests() 
  - checkIfMonthBooked()

  - getPostCategories()

  - function clean($str, $connection) 
*/



/*  Display a <Select> of ticket categories  */
function displaySelectCat() {

  include './include/connect_db.php';
 
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



/*  Display a select of tickets to pick  */
function displaySelectTicket() {
  
  include './include/connect_db.php';
 
  /* Query database for ticket categories */
  $query = "SELECT * FROM txs_ticket_type";  
  $result = $conn->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);


  $rows = $result->num_rows;
  
  echo "<select name=\"ticket_typeId\">";
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


/*  Display ticket categories  */
function displayTicketTypes() {
  
  include './include/connect_db.php';
 
  /* Query database for ticket categories */
  $query = "SELECT * FROM txs_ticket_type";  
  $result = $conn->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);
  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);

    echo <<<_END
    <pre>
      ID                     $row[0]
      Name                   $row[1]
      Gross                  $row[2]
      Net on 20% tax rate    $row[3]
      Net on 40% tax rate    $row[4]
      Short description      $row[5]
      Long description       $row[6]
      Category               $row[7]
    </pre>
_END;
  }

  $result->close();
  $conn->close();
}


/*  Display all the request of an user  */
function displayUserResquests() {

  include './include/connect_db.php';

  /* User email to compare with the row usr_email on the request */
  $curr_user_email = $_SESSION['SESS_MEMBER_ID'];
 
  /* Query database for ticket categories */
  $query = "SELECT * FROM txs_request  where usr_email like '%$curr_user_email%'";

  $result = $conn->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);

  $rows = $result->num_rows;

  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
    echo "<p>".$row[1]."<p>";
  }
  $result->close();
  $conn->close();
}

/*  Check if a specific month has been booked by the user  */
function checkIfMonthBooked($booking) {

  include './include/connect_db.php';

  /* User email to compare with the row usr_email on the request */
  $curr_user_email = $_SESSION['SESS_MEMBER_ID'];
 
  /* Query database for ticket categories */
  $query = "SELECT * FROM txs_request  where usr_email like '%$curr_user_email%'";

  $result = $conn->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);

  $rows = $result->num_rows;

  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
    if ($booking == $row[1])
    echo "month_booked";  
  }
  $result->close();
  $conn->close();
}


//Sanitize and fill categories values from post 
function getPostCategories() {
	if(isset($_POST['tcktcat_id']) && isset($_POST['tcktcat_url']) && isset($_POST['tcktcat_url'])){
		$tcktcat_id = clean($_POST['tcktcat_id'],$conn);
		$tcktcat_name = clean($_POST['tcktcat_name'],$conn);
		$tcktcat_url = clean($_POST['tcktcat_url'],$conn); 
	}
}


/* function to escape db values for security */
function clean($str, $connection) {
  return $connection->real_escape_string($str);
}



?>