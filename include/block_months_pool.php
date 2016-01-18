<?php 
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
<H2>Book monthly Tax Saver for year <?php echo "20".$curr_year ?></H2> 
<div class="months_container">
<?php
    foreach ($months as $num => $name) {

      /* Request identifier :: also for date mmyy */
      $request_id = sprintf("%02d", $num).$curr_year;

      /* Wrapped div include a class "month_booked" if this month is booked */
      echo "<div class=\"month_block ";checkIfMonthBooked($request_id);echo "\"><h4>".$name."</h4>";

      /* build the date for the request in the format mmyy */
      echo "
    <form class=\"bookform\" id=\"request_".$request_id."\" name=\"request_".$request_id."\" method=\"post\" action=\"index.php\">
      <input name=\"request_date_mmyy\" type=\"hidden\" value=\"".$request_id."\"/>
      <input name=\"usr_email\" type=\"hidden\" value=\"".$_SESSION['SESS_MEMBER_ID']."\"/>
      ";

      /* select with all the ticket types */
      displaySelectTicket();

      echo "<input type=\"submit\" value=\"Book\" class=\"btn btn-primary\">";
      echo "
    </form>";
      echo "<p class=\"booked_label\">Already Booked</p>
    <form class=\"cancelform\" id=\"cancel_".$request_id."\" name=\"cancel_".$request_id."\" method=\"post\" action=\"index.php\">
      <input type=\"hidden\" name=\"delete_request\" value=\"yes\">
      <input type=\"hidden\" name=\"request_date_mmyy\" value=\"".$request_id."\">
      <input type=\"submit\" value=\"Cancel\" class=\"btn btn-warning\">
    </form>
</div>
";

    }
?>
</div>