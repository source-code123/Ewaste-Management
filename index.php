<?php
	session_start();
	include('php/config.php');

	
	
	
	if(isset($_POST["login"]))
	{
		$usr = $_POST['email'];
		$psw = $_POST['password'];
		
		$sql = mysql_query("SELECT * FROM register WHERE email = '$usr' AND passwd = '$psw'");
		$row = mysql_fetch_row($sql);
		if($row == true)
		{
			$_SESSION["name"] = $row[0];
			echo "<script language=javascript>window.location= 'types.php'</script>";
		}
		else
			echo "<script language=javascript>alert('Error in login !!!')</script>";
			
	}
?>
<html>
<head>
	<title> WASTE MANAGEMENT </title>
	<link rel="stylesheet"href="style.css">
	<style>
#outer
{
	height: 600px;
	width: 1000px;
	margin:0px auto;
	border: 1px solid;
	/*background-image:url(images\Wood-Texture-Welcome-Image.jpg);*/

}

#index
{
	height:400px;
	width:220px;
	opacity: 0.8;
	margin-left: 570px;
	margin-top: 80px;
	background-color: black;
}
.a
{
	height: 40px;
	width: 180px;
	margin-top: 20px;
	margin-left: 20px;
}

</style>

</head>
<body background="images/welcome.jpg">
	<header>
		<nav>
			<h1>WASTE MANAGEMENT</h1>
			
		</nav>
	</header>
	<div class="divider"></div>
	<div class="fwimage1"></div>
	<center>
	<div id="form" >
	
		<form action="" method="post"></br>
			
			<br><input class="a" type="email" name="email" placeholder="enter your email"/></br>
			<br><input class="a" type="password" name="password" placeholder="enter your password"/></br>
			
			<input  class="a" type="submit"  value="Login" name="login"/>
		</form>
		<label><a href="register.html">Sign in</a></label>
	</div>
	<center>
</body>
</html>