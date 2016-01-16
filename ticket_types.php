<?php 
  $pageName = "Ticket types"; 
  include './include/header.php';

?>

<!-- ///// TICKET TYPES INFO ///// -->
<p>
  Hello! you are logged  as 
  <strong style="color:purple; text-transform:capitalize;"><?php echo $_SESSION['SESS_FIRST_NAME'];?></strong>
  <br /><br />
  <a href="ticket_types.php">See Ticket Types</a> | <a href="form_update_ticket_type.php">Update Tax Saver Types</a> | <a href="member_profile.php">My Profile</a> | <a href="logout.php">Logout</a>
</p>






<?php
  include './include/footer.php' 
?>