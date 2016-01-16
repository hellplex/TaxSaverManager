<?php 
  $pageName = "Home"; 
  include './include/header.php';
  include './include/session_control.php';

  //Include database connection details
  require_once('./include/config.php');
  include('./include/functions.php');
?>

<a href="ticket_types.php">See Ticket Types</a>


<?php 
  /*  If not logged load the Welcome block  */
  if (!$logged){ 
  include('./include/block_welcome.php');
?>

<?php } else {?>

<!-- ///// LOGGED IN CONTENT START ///// -->

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

<script type="text/javascript">
  function addMonth(month){
    console.log(month);
  }
</script>

<p>
  Hello! you are logged  as 
  <strong style="color:purple; text-transform:capitalize;"><?php echo $_SESSION['SESS_FIRST_NAME'];?></strong>
  <br /><br />
  <a href="form_update_ticket_type.php">Update Tax Saver Types</a> | <a href="member_profile.php">My Profile</a> | <a href="logout.php">Logout</a>
</p>
<H2>Book monthly Tax Saver for <?php echo "20".$curr_year;?></H2> 

<h3>Pick the type for all (or change it per month thanks to the magic of JavaScript)</h3>
<p>
  <?php
    displaySelectTicket() 
  ?>
</p>

<div class="months_container">
<?php
    foreach ($months as $num => $name) {
        echo "<div class=\"month_block\">";
        printf('
          <p class="month%u">
            %s
            <br /><input type="button" value="Book" onclick="addMonth(%u)">
            <br /><span style="color: red">Booked</span>
          </p>', $num, $name, $num);
        displaySelectTicket();
        echo "</div>";

    }
?>
</div>


<!-- ///// LOGGED IN CONTENT START ///// -->

<?php } ?>


<?php
  /*include './include/fakecontent.php';*/
  include './include/footer.php' 
?>