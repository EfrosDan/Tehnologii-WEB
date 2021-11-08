<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="css/formstyle.css">
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $sugestionErr = $genderErr =  "";
$name = $email = $sugestion = $gender   = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    


  if (empty($_POST["sugestion"])) {
    $sugestionErr = "Sugestion is required";
  } else {
    $sugestion = test_input($_POST["sugestion"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="topnav">
 <a class="active" href="homepage.html">Acasa</a>
</div>
<h2>Contact</h2>
<div class="content">
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Sugestion: <textarea name="sugestion" rows="5" cols="40"></textarea>
  <span class="error">* <?php echo $sugestionErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>
<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $sugestion;
echo "<br>";
echo $gender;
?>