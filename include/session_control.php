<?php
echo session_id();
echo "<br>";
if (isset($_SESSION['SESS_MEMBER_ID'])) {
  echo "sess member";
  $logged = true;
  print_r($_SESSION);
} 
else {
   echo "no logged";
   $logged = false;
}
?>