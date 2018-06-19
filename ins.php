<html>
<head>
<style>
.wrapper1 {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -250px;
    margin-left: -10px;
}

.wrapper2 {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -250px;
    margin-left: -250px;
}
#section {
    width:350px;
    float:right;
    padding:10px; 
}
input[type=submit] {
    width: 20em;  height: 3em;
}

</style>
<title>  </title>
</head>
<?php
$con=mysqli_connect("localhost","root","","menu");
		
$onum = ($_POST['onum']);
$name = ($_POST['name']);
$num = ($_POST['tb2']);
$add = ($_POST['tb3']);

if(isset($_POST["b1"])=="Continue")
{

mysqli_query($con,"insert into customer (onum,name,number,address) values ('$onum','$name','$num','$add');");


} 

/*if(isset($_POST["b1"])=="Update")
{

mysqli_query($con,"insert into customer (onum,name,number,address) values ('$onum','$name','$num','$add');");


} 
*/
?>

<h1 align = "center"><font face = "bradley hand itc">	MENU</H1>
<body >
<img src="images (1).jpg"  style="width:400px;height:400px">
<form action="insert.php"  method = "post">
<div class =" wrapper2">
Enter Order Number: <input type ="text" placeholder ="onum" name ="onum">
<pre><p><h3><font face="Bradley hand ITC"><b> Soup</b></font></h3><br>
<font face="Bradley hand ITC">Manchow Soup      100/-</font><br>
<font face="Bradley hand ITC">Tomato Soup	     100/-</font> <br></pre>
</p>
<pre><p><h3><font face="Bradley hand ITC"><B>Starter</B></font></h3><br>
<font face="Bradley hand ITC">Reshmi Kebab      200/-</font> <br>
<font face="Bradley hand ITC">Banjara Kebab     200/-</font> <br></pre>
</p></div>
<div class = "wrapper1">

<pre><p> <h3><font face="Bradley hand ITC"><b>Main Course</b></font></h3><br>
<font face="Bradley hand ITC">Baked Beans On Toast                           300/-</font> <br>
<font face="Bradley hand ITC">Chicken sizzler                                      300/- </font> <br></pre>
</p> 

<pre><p><h3><font face="Bradley hand ITC"> <b>Desserts</b></font></h3><br>
<font face="Bradley hand ITC">Red velvet cheese cake                              150/- </font> <br>
<font face="Bradley hand ITC">Lemon-Scented Blueberry Cupcakes        150/- </font> <br></pre>

</div>
<pre><font face ="bradley hand itc">
														<b>     Enter your order:</b>
															Enter Soup: <input type ="text"  name ="soup">
															Enter Starter: <input type ="text" name ="starter">
															Enter Main: <input type ="text"  name ="main">
															Enter Dessert: <input type ="text"  name ="dessert">
</pre>	
<div id ="section" >
<center>
<!--a href ="Order.html">--!><input type="submit" name="Submit" value="Place My Order">
</center>
</form>
</body>
</html>

