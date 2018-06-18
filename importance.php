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
	<title> WASTE MANAGEMENT </title>
	<link rel="stylesheet"href="style.css">
</head>
<body>
<header>
		<nav>
			<h1>WASTE MANAGEMENT Welcome&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['name']; ?></h1>
			
			<ul id="nav">
						
				<li><a class="homeblack" href="types.php">WHAT IS WASTE?</a></li>
				<li><a class="homered" href="importance.php">IMPORTANCE</a></li>
				<li><a class="homeblack" href="contact.php">CONTACT</a></li>
				<li><a class="homeblack" href="aboutus.php">ABOUT US</a></li>
				<li><a class="homeblack" href="php/logout.php">LOGOUT</a></li>
			</ul>
		</nav>
		
	</header>
<h1>IMPORTANCE OF WASTE MANAGEMENT</h1>

we believe that proper waste management is critical for your safety and the environment. When trash is disposed of properly, we are able to prevent less pollution in the air, which can help with improve public health. When you use proper liners and containers for your trash, you are preventing toxic materials from entering the environment.

<h3>4 reasons why proper waste management is important</h3>



<h3>Protects the environment</h3>

<img src="images\download1.jpg">
  
<br><br>
 <li>When waste is disposed of properly, you can prevent hazardous materials from contaminating the environment.</li></br></br>




<h3>Recycling helps you make extra money</h3>
<img src="images\download (1).jpg">
  
 <li>Sort all your recyclables and make some money out of it! Waste disposal can be pricey at times and you should do all that you can to recycle first and then dispose of all waste materials.</li> 

<h3>Reduce waste. Recycle! Recycle! Recycle!</h3>

	<img src="images\download (2).jpg">

<li>
<img src="images\download (3).jpg">
</li>

 <li> The beauty about recycling is you can reduce waste and reuse your materials.</li>


<h3>Safety</h3> 

	<img src="images\download (4).jpg">
  

<br><br> <li>You need to make sure you are properly storing and disposing your trash because it can be harmful to others.
 Whether it’s disposing your trash in the right type of trash liner or container, it can be critical to yours and other people’s safety.</li>
</br></br>
</body>
</html>

