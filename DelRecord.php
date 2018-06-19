<?php
	$con=mysqli_connect("localhost","root","","menu");
	$onum = $_POST["onum"];
	mysqli_query($con,"Delete from menu where onum='$onum'");
	
	header("location:confirm1.php");
	
?>