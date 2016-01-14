<?php
echo session_id();
echo "<br>";
if (isset($_SESSION['SESS_MEMBER_ID'])) {
  echo "sess member";
  print_r($_SESSION);
} else {
   echo "no logged";
}
?>