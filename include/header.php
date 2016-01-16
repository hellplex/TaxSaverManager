<?php
  //Start session
  session_start();
  /*$_SESSION['SESS_MEMBER_ID'] = "usuario loggeado";*/

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tax Saver Manager</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom CSS compiled from sass -->
    <link href="css/screen.css" rel="stylesheet">
  </head>
  <body>
<div class="container">
  <div class="jumbotron">
    <a href="http://localhost/TaxSaverManager/">home</a>
    <h1>TSM <?php echo $pageName ?></h1>
  </div>
