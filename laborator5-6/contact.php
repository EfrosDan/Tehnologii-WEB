<!DOCTYPE html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/contactsyle.css">
<title>Email form</title>
</head>
<body>
<div>
<header>
		<ul>
		<li class="act"><a href="homepage.html">Home</a></li>
		</ul>
	</header>
</div>

 <div id="contact-form">
 <center>
	<div>
		<h1>Ai o întrebare?</h1> 
		<h4>Trimite-ne un mesaj.</h4> 
	</div>
</center>
	<form name="contactform" method="post" action="mail.php">
		<table width="450px">
		<tr>
		 <td valign="top">
		  <label for="first_name">Nume *</label>
		 </td>
		 <td valign="top">
		  <input  type="text" name="first_name" maxlength="50" size="30">
		 </td>
		</tr>
		<tr>
		<td valign="top">
		  <label for="last_name">Prenume *</label>
		</td>
		 <td valign="top">
		  <input  type="text" name="last_name" maxlength="50" size="30">
		 </td>
		</tr>
		<tr>
		 <td valign="top">
		  <label for="email">Email *</label>
		 </td>
		 <td valign="top">
		  <input  type="text" name="email" maxlength="80" size="30">
		 </td>
		</tr>
		<tr>
		 <td valign="top">
		  <label for="telephone">Număr de telefon</label>
		 </td>
		 <td valign="top">
		  <input  type="text" name="telephone" maxlength="30" size="30">
		 </td>
		</tr>
		<tr>
		 <td valign="top">
		  <label for="comments">Comentarii *</label>
		 </td>
		 <td valign="top">
		  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
		 </td>
		</tr>
		<tr>
		 <td colspan="2" style="text-align:center">
		  <input type="submit" value="Trimite">   
		 </td>
		</tr>
		</table>
		</form>
	</div>

</body>
</html>