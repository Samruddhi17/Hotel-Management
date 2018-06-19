<html>
<head>
<title> Your Order Is </title>
<style>
input[type=button] {
    width: 20em;  height: 4em;
}
input[type=submit] {
    width: 20em;  height: 3em;
}
</style>
</head>

<?php
$con=mysqli_connect("localhost","root","","menu");
if($_POST["Submit"]=="Place My Order")
{
$soup = ($_POST["soup"]);
$starter = ($_POST["starter"]);
$main= ($_POST["main"]);
$dessert =($_POST["dessert"]);

$onum   = $_POST['onum'];
mysqli_query($con,"INSERT INTO menu (onum,soup,starter,main,dessert)VALUES('$onum','$soup','$starter','$main','$dessert');");

} 

?>


<body bgcolor = "skyblue">


<form  action="confirm.php" method = "post">
<center>
<a href = "conf.html"><input type="submit" name = "confirm" value="Confirm"></a>
</center>
</form>

<form method = "POST" action="update.php" method = "POST">
<center>
<input type="submit" value="Change" name = "change">
</center>
</form>

<form action="delete.php" method="post">
<center>
	<input type="submit" value="Delete Order" name="delete"></a>
</center>
</form> 

<img src="ekant2.jpg"  style="width:400px;height:350px;lighten:10em">
<img src="ekaant2.jpg" style="width:470px;height:350px">
<img src="image.jpg" style="width:450px;height:350px">
</body>
</html>