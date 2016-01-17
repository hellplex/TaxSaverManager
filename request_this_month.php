<?php 
  $pageName = "Requests this month"; 
  include './include/header.php';
  include './include/session_control.php';
  
  //Include database connection details
  require_once('./include/config.php');
  include('./include/functions.php');

?>

<?php if ($logged){ ?>
<!-- ///// TICKET TYPES INFO ///// -->
<p>
  Logged  as 
  <strong style="color:purple; text-transform:capitalize;"><?php echo $_SESSION['SESS_FIRST_NAME'];?></strong>
  <br /><br />
  <a href="form_update_ticket_type.php">Update Tax Saver Types</a> | <a href="member_profile.php">My Profile</a> | <a href="logout.php">Logout</a>
</p>

<?php } ?>

These are the requests this month: <br/>

ID of this month 

<?php 
$curr_month = date('m',time());
$curr_year = date('y',time());
$curr_month_ID = sprintf("%02d", $curr_month).$curr_year; 

echo $curr_month_ID;
?>

<?php
  displayThisMonthRequests($curr_month_ID);
?>

<?php
  include './include/footer.php' 
?>