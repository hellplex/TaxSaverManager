<h2>These are the requests this month</h2> 
<?php
	/*  display current month ID  */ 
	$curr_month = date('m',time());
	$curr_year = date('y',time());
	$curr_month_ID = sprintf("%02d", $curr_month).$curr_year; 
	echo "ID of this month ".$curr_month_ID;

	/*  
		Loop to display one block for every Category,
		Inside, for every category display the Name of the category
		And the list of requests for this month
	 */ 
	for ($k=0; $k<getCatNum(); ++$k){
		echo "<h3><a href=";
		echo getCategoryURL($k);
		echo ">";
		echo getCategoryName($k);
		echo "</a></h3>";
		displayThisMonthRequests($curr_month_ID,$k+1);
	}
?>