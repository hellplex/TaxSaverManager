<!-- ///// NOT LOGGED CONTENT START ///// -->

  <!-- Intro text for unlogged user-->
  <div class="row">
    <div class="col-md-6">
      <h2>Welcome to Tax Saver Manager</h2>
      <p>Here you can request in advanced your monthly tax saver tickets</p>
      <p>Login to start booking your tickets</p>
    </div>
    <div class="col-md-6"><a class="infolink" href="info_ticket_types.php">
      <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
      See Tax Saver ticket types and details
    </a></div>
  </div>

  <div class="nav_container">
    <ul class="test1 nav nav-tabs">
      <li class="active"><a href="#" data-toggle="tab" aria-expanded="false">Login as Commuter</a></li>
      <li class=""><a href="#" data-toggle="tab" aria-expanded="true">Login as admin</a></li>
    </ul>
  </div>
  <div class="form_container">
    <form id="loginForm" name="loginForm" method="post" action="exec_login.php" class="form-horizontal">
      <div class="form-group">
        <label class="control-label col-sm-4" for="email">Login</label>
        <div class="col-sm-8">
          <input name="usr_email" type="text" class="form-control" id="usr_email" />
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="pwd">Password</label>
        <div class="col-sm-8">
          <input name="usr_password" type="password" class="form-control" id="usr_password" />
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
          <input type="submit" name="Submit" value="Login" class="btn btn-primary" />
        </div>
      </div>
    </form>
  </div>  

  <h4>Not In the system yet? <a href="form_signup.php">Sign up here</a></h4>

<!-- ///// NOT LOGGED CONTENT END ///// -->


