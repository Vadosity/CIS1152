<?php 
// Connects to your Database � note you may want to elaborate on the error checking as discussed in class.
mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("guestbook") or die(mysql_error()); 


if (isset($_POST['submit'])) { 

}

$insert = "INSERT INTO users (Fname, Lname, Email, Comment, Date)
VALUES ('".$_POST['Fname']."','".$_POST['Lname']."','".$_POST['Email']."', '".$_POST['Comment']."',NOW())";

 
$add_comment = mysql_query($insert);
?>
<?php 
} 
else 
{ 
?>
<!DOCTYPE html>

<head>
<title>Leave A Comment</title>
<link rel="stylesheet" type="text/css" href="./CSS_files/MyProjectStyle.css"/>
<meta charset="utf-8">
<html lang="en">
</head>

Please Leave Your Comments Here:
<br /><br />

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<table border="0">
	<tr><td>First Name:</td><td>
	<input type="text" name="Fname" required maxlength="10">
	</td></tr>
	<tr><td>Last Name:</td><td>
	<input type="text" name="Lname" required maxlength="10">
	</td></tr>
	<tr><td>Email:</td><td>
	<input type="text" name="Email" required maxlength="60">
	</td></tr>
	<tr><td>Comment:</td><td>
	<textarea name='comment' id='comment' required maxlength="200"></textarea><br />
	</td></tr>
	<tr><th colspan=2><br /><input type="submit" name="submit" required value="Submit"></th></tr> </table>
	</form>
</link>
<ul class="navigation">
	<a href="./JVN_home.php"> <li class="navigationElements">Home </li> </a>
	<a href="./store.php"><li class="navigationElements">Store </li> </a>
	<a href="./flourish.php"> <li class="navigationElements">Flourish </li> </a>

</ul>

	
</html>



