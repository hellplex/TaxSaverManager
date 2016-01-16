<?php 
  $pageName = "Home"; 
  include './include/header.php';
  include './include/session_control.php';

  //Include database connection details
  require_once './include/config.php';
  include './include/functions.php';


  $booked = false;

if (isset($_POST['request_date_mmyy']) && isset($_POST['usr_email']) && isset($_POST['ticket_typeId'])){
  include('exec_request.php');
}

?>

<a href="ticket_types.php">See Ticket Types</a>

<?php 
  /*  If not logged load the Welcome block, else log the request pool of months  */
  if (!$logged){ 
    include('./include/block_welcome.php');
  } 
  else {

/*  DISPLAY LOGGED CONTENT   ** POOL OF MONTHS FOR REQUEST */

/*  Select current month and year  (via http://stackoverflow.com/questions/470617/get-current-date-and-time-in-php ) */
$curr_month = date('m',time());
$curr_year = date('y',time());

/* Create an array of months and (via http://stackoverflow.com/questions/6221739/php-loop-through-months-array ) */
$months = array();
for ($i = 12; $i >0 ; $i--) {
    $timestamp = mktime(0, 0, 0, date('n') - $i, 1);
    $months[date('n', $timestamp)] = date('F', $timestamp);
}
?>


<p>
  Hello! you are logged  as 
  <strong style="color:purple; text-transform:capitalize;"><?php echo $_SESSION['SESS_FIRST_NAME'];?></strong>
  <br /><br />
  <a href="form_update_ticket_type.php">Update Tax Saver Types</a> | <a href="member_profile.php">My Profile</a> | <a href="logout.php">Logout</a>
</p>

<H2>Book monthly Tax Saver for year <?php echo "20".$curr_year ?></H2> 

<!--

IDEA OF AJAX FUNCTION TO BOOK WITHOUT REFRESH 

<script type="text/javascript">
  function addMonth(month){
    console.log(month);
  }
</script>

<H2>Book monthly Tax Saver for the full year <?php echo "20".$curr_year." from month: ".$curr_month;?></H2> 
<p>
  Type: 
  <?php
    displaySelectTicket() 
  ?>
    <input type="submit" value="Book the rest of the year">
</p>
<h3>Or book by the month</h3> 
-->

<div class="months_container">
<?php
    foreach ($months as $num => $name) {

      /* Request identifier :: also for date mmyy */
      $request_id = sprintf("%02d", $num).$curr_year;

      /* build the date for the request in the format mmyy */
      echo "<form id=\"request_".$request_id."\" name=\"request_".$request_id."\" method=\"post\" action=\"index.php\">
      <p class=\"month_block\">
      <input name=\"request_date_mmyy\" type=\"hidden\" value=\"".$request_id."\"/>
      <input name=\"usr_email\" type=\"hidden\" value=\"".$_SESSION['SESS_MEMBER_ID']."\"/>".$name."<br/>";

      /* select with all the ticket types */
      displaySelectTicket();

      echo "<br /><input type=\"submit\" value=\"Book\">";

      if ($booked) {
        echo "<br /><span style=\"color: red\">Booked</span>";
      }

      echo "</p></form>";

    }
?>
</div>

<?php } 
  include './include/footer.php' 
?>