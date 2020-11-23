


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="3.php" method="post">
	<input type="text" name="name" placeholder="enter your name">
	<input type="submit" name="sub" value="submit">
<?php

if(isset($_POST['sub']))
{
echo "<br>";
echo strtoupper($_POST['name']);
echo "<br>";
echo strtolower($_POST['name']);
echo "<br>";

echo ucfirst($_POST['name']);
echo "<br>";
echo ucwords($_POST['name']);
}
?>	 


</form>
</body>
</html>