<h2>These are the requests this month</h2>

ID of this month 

<?php 
$curr_month = date('m',time());
$curr_year = date('y',time());
$curr_month_ID = sprintf("%02d", $curr_month).$curr_year; 

echo $curr_month_ID;
?>

<?php
  displayThisMonthRequests($curr_month_ID);
?>