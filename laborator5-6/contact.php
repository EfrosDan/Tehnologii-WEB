<?php include 'validation.php';?>
<!DOCTYPE HTML>
<html>
<head>
<title> Contact Form </title>
<link rel="stylesheet" href="css/contactsyle.css" />
</head>
<body>
<div class="container">
<div class="main">
<h2> Contact Form </h2>
<form method="post" action="contact.php">
<input class="input" type="text" placeholder="Name" name="name" value="">
<span class="error"><?php echo $nameError;?></span>
<input class="input" type="text" placeholder="Email" name="email" value="">
<span class="error"><?php echo $emailError;?></span>
<input class="input" type="text" placeholder="Subject" name="purpose" value="">
<span class="error"><?php echo $purposeError;?></span>
<textarea name="message" placeholder="Message" val=""></textarea>
<span class="error"><?php echo $messageError;?></span>
<input class="submit" type="submit" name="submit" value="Submit">
<span class="success"><?php echo $successMessage;?></span>
</form>
</div>
</div>
</body>
</html>