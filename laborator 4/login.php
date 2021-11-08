<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Log in Form</title>
<link href="css/stylelog.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
<script type="text/javascript" src="login.js"></script>
<meta name="robots" content="noindex,nofollow"/>
</head>

<body>
	<div id="wrap"> <!--wrap start-->
    	<div id="wrap2">  <!--wrap2 start-->
       
       	<h2 class="login">Log in</h2> 
        
    	<form action="connection.php" method="post" id="login_form">
        	
                <p class="validate_msg">Please enter the correct Email or password</p>
                
                <p> <label for="email">Your Email</label> <input name="email" type="text" /> <span class="val_email"></span> </p>
                <p> <label for="password">Password</label>  <input name="password" type="password" /> <span class="val_pass"></span> </p>
               
				<input type="submit" name="submit" value="Log in">
        </form>
       
        </div>  <!--wrap2 end-->
    </div>  <!--wrap start-->
</body>
</html>