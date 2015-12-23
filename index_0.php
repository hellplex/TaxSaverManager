<?php 
  $pageName = "Home"; 
  include './include/header.php';
?>


  <h2>Welcome</h2>
  <p>Login to book your commuter Tax Saver  </p>
  <nav>
    <ul>
      <li><a href="">Login as a commuter</a></li>
      <li><a href="">Login as a finance admin</a></li>
    </ul>
  </nav>
  <div class="login_commuter">
    <h3>Login as a commuter</h3>
      <form>

        Email <input type="text" /><br/>
        Password <input type="text" />

      </form>
      <p>forgot your password? <a href="">click here</a></p>
  </div>

  <div class="login_commuter">
    <h3>Login as a finance administrator</h3>
      <form>

        Email <input type="text" /><br/>
        Password <input type="text" />

      </form>
      <p>forgot your password? <a href="">click here</a></p>
  </div>

  <h4>Not logged yet? <a href="signup.php">Sign up here</a></h4>

<?php  include './include/footer.php' ?>