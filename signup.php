<?php 
  $pageName = "Sign up"; 
  include './include/header.php';
?>
  <h3>Sign up to book your commuter Tax Saver  </h3>

  <form>

    Email <input type="text" /><br/>
    Password <input type="text" /> <br/>

    First name <input type="text" /><br/>
    Last name <input type="text" /><br/>
    Travel card ID <input type="text" /><br/>
    Department <input type="text" /><br/><br/>
    
    Optionally, if you wish to sign up as admin, please provide password sent you you by IT<br/>

    Admin password <input type="password" /> (optional)<br/>

  </form>

<?php  include './include/footer.php' ?>