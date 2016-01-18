<?php
  $pageName = "Update Ticket Categories"; 
  include './include/header.php';
  include './include/session_control.php';
?>

<?php
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
<h3>Edit Ticket Categories</h3>
<div class="form_container wideform">
<form id="updateTaxSaverCategory" name="updateTaxSaverCategory" method="post" action="exec_category.php" class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-4">Category name</label>
    <div class="col-sm-8">
      <input name="tcktcat_name" type="text" class="form-control" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4">Category link</label>
    <div class="col-sm-8">
      <textarea rows="4" cols="50" name="tcktcat_url"></textarea>
    </div>
  </div>
  <div class="form-group">
      <div class="col-sm-offset-4 col-sm-8">
        <input type="submit" name="Submit" value="Save Category" class="btn btn-primary" />
      </div>
    </div>
</form>
</div>

<?php } ?>

<?php  include './include/footer.php' ?>