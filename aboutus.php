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
	<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
		<nav>
			<h1>WASTE MANAGEMENT Welcome&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['name']; ?></h1>
			
			<ul id="nav">
						
				<li><a class="homeblack" href="types.php">WHAT IS WASTE?</a></li>
				<li><a class="homeblack" href="importance.php">IMPORTANCE</a></li>
				<li><a class="homeblack" href="contact.php">CONTACT</a></li>
				<li><a class="homered">ABOUT US</a></li>
				<li><a class="homeblack" href="php/logout.php">LOGOUT</a></li>
				
			</ul>
		</nav>
</header>
		
		<h2>About Us</h2>
		<center>
		<table border="1" class="tabtype">
			<tbody>
				<tr>
					<td rowspan="4" align="center"><img src="ananya.jpg"></td>
					<?php
					$q = mysql_query("SELECT * FROM c_person where name='Ananya Das' ",$conn);
					$r = mysql_fetch_row($q);
					?>
				</tr>
				<tr><td>Name: <?= $r[0]; ?></td></tr>
				<tr><td>Contact No. : <?= $r[1]; ?></td></tr>
				<tr><td>e-mail: <?= $r[2]; ?></td></tr>
			
				<?php
					$q = mysql_query("SELECT * FROM c_person where name='Debarati Dutta' ",$conn);
					$r = mysql_fetch_row($q);
				?>
				<tr>
					<td>Name: <?= $r[0]; ?></td>
					<td rowspan="4" align="center"><img src="debarati.jpg"></td>
				</tr>
				<tr><td>Contact No. : <?= $r[1]; ?></td></tr>
				<tr><td>e-mail: <?= $r[2]; ?></td></tr>
				
			</tbody>
			
		</table>
		<br>
		<table border="1" class="tabtype">
			<tbody>
				<tr>
					<td rowspan="4" align="center"><img src="purbita.jpg"></td>
					<?php
					$q = mysql_query("SELECT * FROM c_person where name='Purbita Biswas' ",$conn);
					$r = mysql_fetch_row($q);
					?>
				</tr>
				<tr><td>Name: <?= $r[0]; ?></td></tr>
				<tr><td>Contact No. : <?= $r[1]; ?></td></tr>
				<tr><td>e-mail: <?= $r[2]; ?></td></tr>
			
			
				<?php
					$q = mysql_query("SELECT * FROM c_person where name='Aman Prasad' ",$conn);
					$r = mysql_fetch_row($q);
				?>
				<tr>
					<td>Name: <?= $r[0]; ?></td>
					<td rowspan="4" align="center"><img src="aman.jpg" align="center"></td>
				</tr>
				<tr><td>Contact No. : <?= $r[1]; ?></td></tr>
				<tr><td>e-mail: <?= $r[2]; ?></td></tr>
				
			</tbody>
			
		</table>
		<center>
		<br>
		</body>
</html>