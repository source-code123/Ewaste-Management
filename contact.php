<?php
	
	session_start();
		
	include('php/config.php');
	if($_SESSION['name'] != true) { //if not yet logged in
		echo "<script language=javascript>window.location= 'index.php'</script>";
		exit;
	} 
?>

<html>
<head>
  <title>CONTACT</title>
  <link href="style1.css" type="text/css" rel="stylesheet" >
  <link href="style.css" type="text/css" rel="stylesheet" >
  <script type="text/javascript">
		function check()
		{
			var a = document.forms["frm"]["firstname"].value;
			var b = document.forms["frm"]["lastname"].value;
			var c = document.forms["frm"]["city"].value;
			var d = document.forms["frm"]["subject"].value;
			
			if(a == "" || b == "" || c == "" || d == "")
			{
				alert("Please fill the required fields...");
				return false;
			}
		}
	</script>
</head>
<body>
	<header>
		<nav>
			<h1>WASTE MANAGEMENT Welcome&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['name']; ?></h1>
			<ul id="nav">
				<li><a class="homeblack" href="types.php">WHAT IS WASTE?</a></li>
				<li><a class="homeblack" href="importance.php">IMPORTANCE</a></li>
				<li><a class="homered" href="contact.php">CONTACT</a></li>
				<li><a class="homeblack" href="aboutus.php">ABOUT US</a></li>
				<li><a class="homeblack" href="php/logout.php">LOGOUT</a></li>
			</ul>
		</nav>
	</header>
	<table border="1" align="right">
		<tr>
			
			<td>
				<div class="container">
 
					<form method="post" action="php/contactsave.php" name="frm" onsubmit="return check()">
						<label for="fname">First Name</label>
						<input type="text" id="fname" name="firstname" placeholder="Your name..">

						<label for="lname">Last Name</label>
						<input type="text" id="lname" name="lastname" placeholder="Your last name..">

						<label for="city">CITY</label>
						<select id="city" name="city">
							<option value="siliguri">SILIGURI</option>
							<option value="kolkata">KOLKATA</option>
							<option value="bangalore">BANGALORE</option>
						</select>

						<label for="subject">Subject</label>
						<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

						<input type="submit" value="Submit">

					</form>
				</div>
			</td>
		</tr>
	</table>
</body>
</html>