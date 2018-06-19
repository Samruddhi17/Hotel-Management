<?php
	$con=mysqli_connect("localhost","root","","menu");
	$onum = $_POST["number"];
	$nsoup = $_POST["nsoup"];
	$nstarter = $_POST["nstarter"];
	$nmain = $_POST["nmain"];
	$ndessert = $_POST["ndessert"];
	mysqli_query($con,"UPDATE menu SET soup='$nsoup',starter='$nstarter',main='$nmain',dessert='$ndessert' where onum = '$onum';");
	
	header("location:confirm.php");

?>