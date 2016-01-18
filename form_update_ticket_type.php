<?php
  $pageName = "Update Ticket Types"; 
  include './include/header.php';
  include './include/session_control.php';
  include('./include/functions.php');

  //Include database connection details
  require_once('./include/config.php');
  
// Check that user is authenticated, if show message 
if (!$logged) { 
?>
  <p>
    Sorry you are not logged! 
    <a href="index.php">Please go to index</a>
  </p>

<?php }
else {
  // Content authenticated 

  include('./include/subheader_admin.php');
?>

<h3>Edit or add Commute types</h3>

<div class="form_container wideform">
<form id="updateTicketType" name="updateTicketType" method="post" action="exec_ticketType.php" class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-4">Ticket name</label>
    <div class="col-sm-8">
      <input name="ticket_name" type="text" class="form-control" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4">Monthly price (gross)</label>
    <div class="col-sm-8">
      <input name="ticket_gross" type="text" class="form-control" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4">Net price (20%)</label>
    <div class="col-sm-8">
      <input name="ticket_net1" type="text" class="form-control" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4">Net price (40%)</label>
    <div class="col-sm-8">
      <input name="ticket_net2" type="text" class="form-control" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4">Short Description</label>
    <div class="col-sm-8">
      <input name="ticket_shortDescript" type="text" class="form-control" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4">Long Description</label>
    <div class="col-sm-8">
      <input name="ticket_longDescript" type="text" class="form-control" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4">Ticket category</label>
    <div class="col-sm-8">
      <?php
        /* Generate the ticket categories select from the DB */
        displaySelectCat();
      ?>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
      <input type="submit" name="Submit" value="Save" class="btn btn-primary" />
    </div>
  </div>
</form>
</div>

<?php } ?>


<?php  include './include/footer.php' ?>