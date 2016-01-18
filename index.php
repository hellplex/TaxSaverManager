<?php 
  $pageName = "Home"; 
  /* Generic Header */
  include './include/header.php';

  include './include/session_control.php';
  require_once './include/config.php';
  include './include/functions.php';

/* If we requested BOOK MONTH: process request */
if (
  isset($_POST['request_date_mmyy']) 
  && isset($_POST['usr_email']) 
  && isset($_POST['ticket_typeId'])) {

  include('exec_request.php');
}


/* If we requested CANCELMONTH: process cancel */
if (isset($_POST['request_date_mmyy'])
  && isset($_POST['delete_request'])) {
  
  include('exec_cancel_request.php');
}


/*  If NOT LOGGED load the Welcome block with the login block  */
if (!$logged){ 
  include('./include/block_welcome.php');
} 
else {

/*  Else if LOGEGED display the sub-header and months pool */
  include('./include/subheader_logged.php');
  include('./include/block_months_pool.php');
}

/* Generic Footer */
include './include/footer.php' 
?>