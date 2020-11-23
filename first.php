


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="first.php" method="post">
	<input type="text" name="name" placeholder="enter your name">
	<input type="submit" name="sub" value="submit">
<?php
if(isset($_POST['sub']))
{
echo "hello ".$_POST['name'];
}
?>	 


</form>
</body>
</html>