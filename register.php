<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/favicon-16x16.png">

    <title>Fexper - Register</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Fexper</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li ><a href="login.php">Login</a></li>
        </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container">

        <div>
            <form class="form-horizontal" role="form" action="" method="post">
              
                <fieldset>
            
                    <!-- Form Name -->
                    <legend>Register</legend>

                    <h3>Create new account</h3>
            
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="username">Username</label>  
                      <div class="col-md-4">
                      <input id="username" name="username" type="text" placeholder="username Number" class="form-control input-md" required="">
                      <span class="help-block">Business username</span>  
                      </div>
                    </div>
            
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="email">Email</label>  
                      <div class="col-md-4">
                      <input id="email" name="email" type="text" placeholder="Email address" class="form-control input-md" required="">
                      <span class="help-block">Email will be used for notication messages</span>  
                      </div>
                    </div>
            
                    <!-- Password input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="password">Password </label>
                      <div class="col-md-4">
                        <input id="password" name="password" type="password" placeholder="Password " class="form-control input-md" required="">
                        <span class="help-block">Admin Password </span>
                      </div>
                    </div>
            
                    <!-- Password input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="rpassword">confirm</label>
                      <div class="col-md-4">
                        <input id="rpassword" name="rpassword" type="password" placeholder="Password" class="form-control input-md" required="">
                        <span class="help-block">Retype pass word</span>
                      </div>
                    </div>
            
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="address1">Address</label>  
                      <div class="col-md-4">
                      <input id="address1" name="address1" type="text" placeholder="Address " class="form-control input-md" required="">
                
                      </div>
                    </div>

            
                    <!-- Button (Double) -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="save"></label>
                      <div class="col-md-8">
                        <button id="save" name="save" class="btn btn-success">Save</button>
                        <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
                      </div>
                    </div>
            
                    </fieldset>
                    </form>
            </div>
            

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>