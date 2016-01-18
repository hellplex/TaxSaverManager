<?php
  $pageName = "Sign up"; 
  include './include/header.php';
  include './include/session_control.php';
?>

<?php
// Check that user is not authenticated, to show the Sign up form
if (!$logged) { 
?>

<h3>Sign up to book your commuter Tax Saver  </h3>

<div class="form_container wideform">
  <form id="loginForm" name="loginForm" method="post" action="exec_signup.php" class="form-horizontal">
      <div class="form-group">
        <label class="control-label col-sm-4">Email</label>
        <div class="col-sm-8">
          <input name="usr_email" type="text" class="form-control" id="usr_email" />
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4">Password</label>
        <div class="col-sm-8">
          <input name="usr_password" type="password" class="form-control" id="usr_password" />
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4">Confirm Password </label>
        <div class="col-sm-8">
          <input name="cpassword" type="password" class="form-control" id="cpassword" />
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4">Name</label>
        <div class="col-sm-8">
          <input name="usr_firstName" type="text" class="form-control" id="usr_firstName" />
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4">Last Name</label>
        <div class="col-sm-8">
          <input name="usr_lastName" type="text" class="form-control" id="usr_lastName" />
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4">Travel Card Id</label>
        <div class="col-sm-8">
          <input name="usr_travelCardId" type="text" class="form-control" id="usr_travelCardId" />
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4">Department</label>
        <div class="col-sm-8">
          <select name="usr_departmentId" class="form-control" id="usr_departmentId">
            <option value="1">Finance</option>
            <option value="2">R&D</option>
            <option value="3">Human Resources</option>
            <option value="4">Marketing</option>
            <option value="5">Legal</option>
            <option value="6">Account Management</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4">Sign up as Admin (optional)</label>
        <div class="col-sm-8">
          <select name="usr_isAdmin" class="form-control" id="usr_isAdmin">
            <option value="1">yes</option>
            <option value="2">no</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
          <input type="submit" name="Submit" value="Register" class="btn btn-primary" />
        </div>
      </div>
  </form>
</div>
<?php }
else {
  // Content authenticated - Message to log out before register a new user
?>

  <p>You are currently logged! </p>
  <p><a href="logout.php">Logout</a> to Sign up a new user, or <a href="index.php">Go to index</a></p>
 

<?php } ?>

<?php  include './include/footer.php' ?>