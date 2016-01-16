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


<form id="loginForm" name="loginForm" method="post" action="exec_signup.php">
  <table width="500" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th align="right">Email </th>
      <td><input name="usr_email" type="text" class="textfield" id="usr_email" /></td>
    </tr>
    <tr>
      <th align="right">Password</th>
      <td><input name="usr_password" type="password" class="textfield" id="usr_password" /></td>
    </tr>
    <tr>
      <th align="right">Confirm Password </th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
    </tr>

    <tr>
      <th align="right">   </th>
      <td>  <br/><br/> </td>
    </tr>

    <tr>
      <th align="right">Name</th>
      <td><input name="usr_firstName" type="text" class="textfield" id="usr_firstName" /></td>
    </tr>
    <tr>
      <th align="right">Last Name</th>
      <td><input name="usr_lastName" type="text" class="textfield" id="usr_lastName" /></td>
    </tr>
    <tr>
      <th align="right">Travel Card Id</th>
      <td><input name="usr_travelCardId" type="text" class="textfield" id="usr_travelCardId" /></td>
    </tr>
    <tr>
      <th align="right">Department</th>
      <td><input name="usr_departmentId" type="text" class="textfield" id="usr_departmentId" /></td>
    </tr>
    <tr>
      <th align="right">Sign up as Admin</th>
      <td><input name="usr_isAdmin" type="text" class="textfield" id="usr_isAdmin" /></td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Register" /></td>
    </tr>
  </table>
</form>

<?php }
else {
  // Content authenticated - Message to log out before register a new user
?>

  <p>You are currently logged! </p>
  <p><a href="logout.php">Logout</a> to Sign up a new user, or <a href="index.php">Go to index</a></p>
 

<?php } ?>

<?php  include './include/footer.php' ?>