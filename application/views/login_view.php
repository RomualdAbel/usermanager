<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/ico/favicon.ico">

    <title>Sign in - User Manager</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

        <div class="etiquette">
            <form class="form-signin" role="form" action="<?php echo base_url();?>index.php/login/do_login" method="post">
              <h2 class="form-signin-heading" align="center">Login</h2><br>
              <?php 
                if(isset($msg)){
              ?>
              <div class="alert alert-danger">
                <?php echo $msg ;?>
              </div>
              <?php 
                }
              ?>
              <input type="email" class="form-control" placeholder="Email address" name="email" required autofocus>
              <input type="password" class="form-control" placeholder="Password" name="password" required>
              <br>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
              <br><p align="center"><a href="<?php echo base_url();?>index.php/users/register">Create an account</a></p>
            </form>
        </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
