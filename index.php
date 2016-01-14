<?php 
  $pageName = "Home"; 
  include './include/header.php';
  include './include/session_control.php';
?>


<?php if (!$logged){ ?>

  <h2>Welcome to Tax Saver Manager.</h2>
  
  <p>Login to book your monthly commuter Tax Saver  </p>

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


<?php 
/* Select current month and year 
via http://stackoverflow.com/questions/470617/get-current-date-and-time-in-php*/
$curr_month = date('m',time());
$curr_year = date('y',time());

/* Create an array of months and   
via http://stackoverflow.com/questions/6221739/php-loop-through-months-array
*/
$months = array();
for ($i = 12; $i >0 ; $i--) {
    $timestamp = mktime(0, 0, 0, date('n') - $i, 1);
    $months[date('n', $timestamp)] = date('F', $timestamp);
}
?>

<style>
  .months_container {
    display: block;
    overflow: hidden;
  }
  p.month_block {
    border: solid 1px;
    float: left;
    margin-right: 2%;
    width: 31%;

  }
</style>

<script type="text/javascript">
  function addMonth(month){
    console.log(month);
  }
</script>

<p><br/><br/>Congratulations! you are logged :  <a href="member_profile.php">My Profile</a> | <a href="logout.php">Logout</a></p>
<p>LOGGED</p>
<H2>BOOK MONTHLY TAX SAVER FOR <?php echo "20".$curr_year;?></H2> 

<h3>Starting next month</h3>

<div class="months_container">
<?php
    foreach ($months as $num => $name) {
        printf('
          <p class="month_block month%u">
            %s
            <br /><input type="button" value="Book" onclick="addMonth(%u)">
            <br /><span style="color: red">Booked</span>
          </p>', $num, $name, $num);
    }
?>
</div>





<?php
// end of logged content 
} ?>


<?php
  /*include './include/fakecontent.php';*/
  include './include/footer.php' 
?>