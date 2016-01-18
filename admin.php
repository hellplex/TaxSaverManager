<?php 
  $pageName = "Admin user"; 
  /* Generic Header */
  include './include/header.php';

  include './include/session_control.php';
  require_once './include/config.php';
  include './include/functions.php';

/*  If NOT LOGGED load the Welcome block  */
if (!$logged){ 
  include('./include/block_welcome.php');
} 
else {

/*  Else if LOGEGED display the Admin sub-header and Request by Category tables pool */
  include('./include/subheader_admin.php');
  include('./include/block_requests_this_month.php');
}

/* Generic Footer */
include './include/footer.php' 
?>