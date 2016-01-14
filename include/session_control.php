<?php
//echo session_id();
//echo "<br>";
if (isset($_SESSION['SESS_MEMBER_ID'])) {
  $logged = true;
  //print_r($_SESSION);
} 
else {
   $logged = false;
}
/*  Code for Session Errors saved here just in case

  if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    echo '<ul class="err">';
    foreach($_SESSION['ERRMSG_ARR'] as $msg) {
      echo '<li>',$msg,'</li>'; 
    }
    echo '</ul>';
    unset($_SESSION['ERRMSG_ARR']);
  }
*/
?>