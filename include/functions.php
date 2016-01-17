<?php

/*  

  INDEX OF FUNCTIONS IN THIS FILE

  QUERIES
  - displaySelectCat()            // To display a select of categories 
  - displaySelectTicket()         // To display a select of types of ticket
  - displayTicketTypes()          // To  list the types of ticket
  - displayUserResquests()        // To list all the request from the logged user
  - checkIfMonthBooked($booking)  // To check if a month passed as an argument is booked, if so returns string "month_booked" used as a css class name"        

  UTILS
  - function clean($str, $connection)  // To sanitize values received from the form. Prevents SQL injection
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
 
  /* Query database for ticket types */
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


/*  Display ticket types  */
function displayTicketTypes() {
  
  include './include/connect_db.php';
 
  /* Query database for ticket types */
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


/*  Display requests this month sorted by category  */
function displayThisMonthRequests($this_month_id) {
  
  include './include/connect_db.php';
 
  /* Query database for ticket types */
  $query = "SELECT * FROM txs_user u JOIN txs_request r JOIN txs_ticket_type t JOIN txs_ticket_category c
  WHERE u.usr_email = r.usr_email 
  AND r.ticket_typeId = t.ticket_typeId
  AND t.tcktcat_id = c.tcktcat_id
  ORDER BY c.tcktcat_id";  
  $result = $conn->query($query);
    if (!$result) die ("Database access failed: " . $conn->error);
  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);

    if ($this_month_id==$row[8]) {
    echo <<<_END
    <pre>

      ticket category      $row[12]
      
      request date !!      $row[8]
      Name                 $row[2]
      Surname              $row[3]
      request user email   $row[9]
      travel card          $row[4]
      url                  $row[21]
  
    </pre>
_END;
    }
  }

  $result->close();
  $conn->close();
}


/*  Display all the request of an user  */
function displayUserResquests() {

  include './include/connect_db.php';

  /* User email to compare with the row usr_email on the request */
  $curr_user_email = $_SESSION['SESS_MEMBER_ID'];
 
  /* Query database for ticket requests by the logged user */
  $query = "SELECT * FROM txs_request  WHERE usr_email LIKE '%$curr_user_email%' ORDER BY request_date_mmyy";

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
 
  /* Query database for ticket requests by the logged user */
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

/* Function to sanitize values received from the form. Prevents SQL injection */
function clean($str, $connection) {
  return $connection->real_escape_string($str);
}

?>