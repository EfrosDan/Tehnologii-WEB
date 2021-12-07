<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/register.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body class="">
<div role="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="homepage.html">Home</a></li>
           
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	<div class="container" style="min-height:500px;">
	<div class=''>
	</div>
			
<div class="container">
	<div class="register_container">
		<form class="form-signin" method="post"  id="register-form">
				<h2 class="form-signin-heading  text-center">User Registration Form</h2><hr />
			<div class="col-md-4 col-md-offset-4 well">
				<h4>You need to complete all textboxes</h4>

				<div id="error">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name" />
				</div>
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
					<span id="check-e"></span>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password" name="password" id="password" />
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
						<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
					</button> 
			</div>
	</div>  
		</form>
</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		Already Registered? <a href="login.php">Login Here</a>
		</div>
	</div>
	<div class="insert-post-ads1" style="margin-top:20px;">
	</div>
</body>
</html>
