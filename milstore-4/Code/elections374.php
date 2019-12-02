<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="out374.css">
	<title>SignIn / UP</title>
</head>
<body>
	<header>
	      <img class="logo" src="logo.png" alt="logo" width="10%" height="65%">	<h1 id="header">WEI LAI</h1>
	</header>
	<nav>
	  <li><a href="trial.php" >Homepage</a></li>
	  <li><a class = "active" href="elections374.php">Elections</a></li>
	  <li><a href="AboutUs374.php">About Us</a></li>
	  <li><a href="feedBack374.php">FeedBack</a></li>
	  <li><a href="contactUs374.php">Contact Us</a></li>
	</nav>
	<div id="main">
	</div>

		<?php
		//connect to the localhost
		$db = new mysqli("localhost", "liu725", "liuxiny", "liu725");
		if ($db->connect_error)			//check errors
		{
			die ("Connection failed: " . $db->connect_error);
			echo "Connection failed";
		}


		//command to gather all data in the candidate table and store in the $Candidate array
		$Candidate = mysqli_query( $db, "select * from candidate");
					//Show all the content in the website
					while($rows = mysqli_fetch_assoc($Candidate)){
							 echo "Name: ".$rows['name'];
							 echo " ".$rows['avatar']; 
							 echo "Link "."<p style='color : blue;'>".$rows['link']; 
							 echo "Information ".$rows['info'];
						//echo $name[$index]." <br>".$avatar[$index]." <br>".$link[$index]."<br>".$content[$index]."<br>";

					}



		$db->close();
		//exit();

		?>





			<footer>
			<div id="footer">
				Copyright &copy; 2019
			</div>
		</footer>
</body>
</html>
