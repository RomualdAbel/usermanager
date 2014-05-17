<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/ico/favicon.ico">

    <title>Dashboard - User Manager</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
              <img src="<?php echo base_url();?>assets/img/logo.png" alt="UserManager" style="width: 25px; height: 25px;"/>
              User Manager
          </a>
        </div>
        
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <br><br>
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="<?php echo base_url();?>index.php/users">Users</a></li>
            <li><a href="<?php echo base_url();?>index.php/dashboard/logout">Logout</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            
            <div class="col-xs-6 col-sm-4 placeholder">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                      Panel content
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 placeholder">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                      Panel content
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 placeholder">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                      Panel content
                    </div>
                </div>
            </div>

          </div>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/docs.min.js"></script>
  </body>
</html>
