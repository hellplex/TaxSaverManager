<?php 
  $pageName = "Home"; 
  include './include/header.php';
  include './include/session_control.php';
?>


<?php if (!$logged){ ?>

<p>NOT LOGGED</p>

  <h2>Welcome you are not logged</h2>
  
  <p>Login to book your commuter Tax Saver  </p>

  <form id="loginForm" name="loginForm" method="post" action="login_exec.php">
    <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
      <tr>
        <td width="112"><b>Login</b></td>
        <td width="188"><input name="usr_email" type="text" class="textfield" id="usr_email" /></td>
      </tr>
      <tr>
        <td><b>Password</b></td>
        <td><input name="usr_password" type="password" class="textfield" id="usr_password" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="Submit" value="Login" /></td>
      </tr>
    </table>
  </form>

  <h4>Not In the system yet? <a href="signup.php">Sign up here</a></h4>

<?php } else {?>

  <p><br/><br/>Congratulations! you are logged :  <a href="member_profile.php">My Profile</a> | <a href="logout.php">Logout</a></p>


  <p>LOGGED</p>

<?php } ?>


<?php
  /*include './include/fakecontent.php';*/
  include './include/footer.php' 
?>