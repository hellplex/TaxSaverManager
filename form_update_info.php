<?php
  $pageName = "Update Info"; 
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
?>


<h3>Edit or add Commute types</h3>


<form id="updateTaxSaverType" name="updateTaxSaverType" method="post" action="register_exec.php">
  <table width="500" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th align="right">usr_email </th>
      <td><input name="usr_email" type="text" class="textfield" id="usr_email" /></td>
    </tr>
    <tr>
      <th align="right">usr_password</th>
      <td><input name="usr_password" type="password" class="textfield" id="usr_password" /></td>
    </tr>
    <tr>
      <th align="right">Confirm usr_password </th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
    </tr>

    <tr>
      <th align="right">   </th>
      <td>  <br/><br/> </td>
    </tr>

    <tr>
      <th align="right">usr_firstName</th>
      <td><input name="usr_firstName" type="text" class="textfield" id="usr_firstName" /></td>
    </tr>
    <tr>
      <th align="right">usr_lastName</th>
      <td><input name="usr_lastName" type="text" class="textfield" id="usr_lastName" /></td>
    </tr>
    <tr>
      <th align="right">usr_travelCardId</th>
      <td><input name="usr_travelCardId" type="text" class="textfield" id="usr_travelCardId" /></td>
    </tr>
    <tr>
      <th align="right">usr_departmentId</th>
      <td><input name="usr_departmentId" type="text" class="textfield" id="usr_departmentId" /></td>
    </tr>
    <tr>
      <th align="right">usr_isAdmin</th>
      <td><input name="usr_isAdmin" type="text" class="textfield" id="usr_isAdmin" /></td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Register" /></td>
    </tr>
  </table>
</form>


<?php } ?>



<!--
  <form id="loginForm" name="loginForm" method="post" action="register_exec.php">

    Email <input type="text" /><br/>
    Password <input type="text" /> <br/>

    First name <input type="text" /><br/>
    Last name <input type="text" /><br/>
    Travel card ID <input type="text" /><br/>
    Department <input type="text" /><br/><br/>
    
    Optionally, if you wish to sign up as admin, please provide password sent you you by IT<br/>

    Admin password <input type="password" /> (optional)<br/>

  </form>
-->

<?php  include './include/footer.php' ?>