<p>
  Hello! you are logged  as an 
  <strong class="highlighted">ADMIN : <?php echo $_SESSION['SESS_FIRST_NAME'];?></strong>
  <br /> 
  <?php
  	if ($pageName!="Admin user") {
  ?>
  <a href="admin.php"><strong>< Back to Admin index</strong></a>
  
  <?php
	}
  ?>
  <br/>
  <a href="form_update_ticket_type.php">Edit ticket types</a> |
  <a href="form_update_ticketcat.php">Edit categories</a> | 
  <a href="logout.php">Logout</a>
</p>