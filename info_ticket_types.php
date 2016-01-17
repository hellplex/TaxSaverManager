<?php 
  $pageName = "Ticket types"; 
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

These are the types of ticket that can be booked on monthly bases: <br/>


<?php
  displayTicketTypes();
?>

<?php
  include './include/footer.php' 
?>