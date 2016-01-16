<?php
  $pageName = "Ticket Categories"; 
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


<h3>Edit Ticket Categories</h3>


<form id="updateTaxSaverCategory" name="updateTaxSaverCategory" method="post" action="category_exec.php">
  <table width="500" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th align="right">Category name </th>
      <td><input name="tcktcat_name" type="text" class="textfield" /></td>
    </tr>
    <tr>
      <th align="right">   </th>
      <td>  <br/> </td>
    </tr>
    <tr>
      <th align="right" valign="top">Category link</th>
      <td>
        <textarea rows="4" cols="50" name="tcktcat_url"></textarea>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Save Category" /></td>
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