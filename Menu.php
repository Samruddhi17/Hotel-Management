<html>
<head>
<h1 align = "center"><font face = "bradley hand itc">	MENU</H1>
<title> Menu </title>
<style>
.wrapper1 {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -170px;
    margin-left: -10px;
}

.wrapper2 {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -150px;
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
</head>

<body >

<img src="images (1).jpg"  style="width:400px;height:400px">
<form action="insert.php"  method = "post">
<div class =" wrapper2">
Enter Order Number: <input type ="text" placeholder ="onum" name ="onum">
<pre><p><h3><font face="Bradley hand ITC"><b> Soup</b></font></h3><br>
<input type="checkbox" name="chk1" value="1"><font face="Bradley hand ITC">Manchow Soup      100/-</font><br>
<input type="checkbox" name="chk2" value="1"><font face="Bradley hand ITC">Tomato Soup	     100/-</font> <br></pre>
</p>
<pre><p><h3><font face="Bradley hand ITC"><B>Starter</B></font></h3><br>
<input type="checkbox" name="chk3" value="1"><font face="Bradley hand ITC">Reshmi Kebab      200/-</font> <br>
<input type="checkbox" name="chk4" value="1"><font face="Bradley hand ITC">Banjara Kebab     200/-</font> <br></pre>
</p></div>
<div class = "wrapper1">

<pre><p> <h3><font face="Bradley hand ITC"><b>Main Course</b></font></h3><br>
<input type="checkbox" name="chk5" value="1"><font face="Bradley hand ITC">Baked Beans On Toast                           300/-</font> <br>
<input type="checkbox" name="chk6" value="1"><font face="Bradley hand ITC">Chicken sizzler                                      300/- </font> <br></pre>
</p> 

<pre><p><h3><font face="Bradley hand ITC"> <b>Desserts</b></font></h3><br>
<input type="checkbox" name="chk7" value="1"><font face="Bradley hand ITC">Red velvet cheese cake                              150/- </font> <br>
<input type="checkbox" name="chk8" value="1"><font face="Bradley hand ITC">Lemon-Scented Blueberry Cupcakes        150/- </font> <br></pre>
</div>
<div id ="section" >
<center>
<!--a href ="Order.html">--!><input type="submit" name="Submit" value="Place My Order">
</center>
</form>
</body>
</html>