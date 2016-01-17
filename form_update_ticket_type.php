<?php
  $pageName = "Update Ticket Types"; 
  include './include/header.php';
  include './include/session_control.php';
  include('./include/functions.php');

  //Include database connection details
  require_once('./include/config.php');
  
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

  include('./include/subheader_admin.php');
?>

<h3>Edit or add Commute types</h3>

<form id="updateTicketType" name="updateTicketType" method="post" action="exec_ticketType.php">
  <table width="500" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th align="right">Ticket name </th>
      <td><input name="ticket_name" type="text" class="textfield" /></td>
    </tr>
    <tr>
      <th align="right">Monthly price (gross)</th>
      <td><input name="ticket_gross" type="text" class="textfield" /></td>
    </tr>
    <tr>
      <th align="right">Net price (20%)</th>
      <td><input name="ticket_net1" type="text" class="textfield" /></td>
    </tr>
    <tr>
      <th align="right">Net price (40%)</th>
      <td><input name="ticket_net2" type="text" class="textfield" /></td>
    </tr>
    <tr>
      <th align="right">Short Description</th>
      <td><input name="ticket_shortDescript" type="text" class="textfield" /></td>
    </tr>

    <tr>
      <th align="right">Long Description</th>
      <td><input name="ticket_longDescript" type="text" class="textfield" /></td>
    </tr>
    <tr>
      <th align="right">Ticket category</th>
      <td>

      <?php
        /* Generate the ticket categories select from the DB */
        displaySelectCat();
      ?>

      </td>
    </tr>


    <tr>
      <th align="right">   </th>
      <td>  <br/><br/> </td>
    </tr>


    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Register" /></td>
    </tr>
  </table>
</form>


<?php } ?>


<?php  include './include/footer.php' ?>