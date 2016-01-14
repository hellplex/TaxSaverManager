<?php
echo session_id();
echo "<br>";
if (isset($_SESSION['SESS_MEMBER_ID'])) {
  $logged = true;
  print_r($_SESSION);
} 
else {
   $logged = false;
}
?>