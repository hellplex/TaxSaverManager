<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login Form</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
<form id="loginForm" name="loginForm" method="post" action="register_exec.php">
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
</body>
</html>
