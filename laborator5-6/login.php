<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log in  </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/login.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body class="">
<div role="navigation" class="navbar navbar-default navbar-static-top">
    <div class="container">
        
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="homepage.html">Home</a></li>
          </ul>
        </div>
    </div>
	
	<div class="container" style="min-height:500px;">
	<div class=''>
	</div>

    <div class="container">
	<div class="register_container">
	    <form class="form-signin" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="register-form">
	         <h2 class="form-signin-heading text-center">User Log in Form</h2><hr />
            <div class="col-md-4 col-md-offset-4 well">     
                    <div id="error">
	                </div>
	
	                <div class="form-group">
	                    <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
	                    <span id="check-e"></span>
	                </div>
	                <div class="form-group">
	                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
	                </div>
	                <div class="form-group">
	                    <button type="submit" class="btn btn-default" name="login_button" id="btn-submit">
	                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Log in
	                    </button> 
	                </div> 
	    </form>
	</div>
            </div>
            <div class="row">
		        <div class="col-md-4 col-md-offset-4 text-center ">	
		            New User? <a href="index.php">Sign Up Here</a>
		        </div>
            </div>
</div>
</body>
</html>