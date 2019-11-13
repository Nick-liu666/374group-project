<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="out374.css">
	<title>SignIn / UP</title>
</head>
<body>
	<header>
	      <img class="logo" src="logo.jpg" alt="logo" width="10%" height="65%">	<h1 id="header">WEI LAI</h1>
	</header>
	<nav>
	  <li><a href="trial.php" >Homepage</a></li>
	  <li><a href="elections374.php">Elections</a></li>
	  <li><a href="AboutUs374.php">About Us</a></li>
	  <li><a href="feedBack374.php">Feed Back</a></li>
	  <li><a href="contactUs374.php">Contact Us</a></li>
	</nav>
	<div id="main">
	</div>

		<?php

		$db = new mysqli("localhost", "liu725", "liuxiny", "liu725");
		if ($db->connect_error)			//check errors
		{
			die ("Connection failed: " . $db->connect_error);
			echo "Connection failed";
		}
		//command to insert the content to database
		// for($index = 0; $index < 5; $index++){
		// 	//$content[$index] = addslashes($content[$index]);
		// 	$link[$index] = addslashes($link[$index]);
		// 	echo $index;
		// 	echo $name[$index]." <br>".$avatar[$index]." <br>".$link[$index]."<br>".$content[$index]."<br>";
		// 	$q = "insert into candidate (election_ID, name, avatar, info, link) values ('1', '$name[$index]', '$avatar[$index]', '$content[$index]', '$link[$index]')";
		// 	$r = $db->query($q);
		// 	if ($r === true)		//check is it worked or not
		// 	{
		// 		echo "Successful gathering data<br>";
		// 	}
		// 	else{
		// 		echo "Unsuccessful gathering data<br>";
		// 		echo("Error description: " . mysqli_error($db));
		// 	}
		// }


		$Candidate = mysqli_query( $db, "select * from candidate");

					while($rows = mysqli_fetch_assoc($Candidate)){



							 echo "Name: ".$rows['name'];
							 echo " ".$rows['avatar']; 
							 echo " ".$rows['link'];
							 echo " ".$rows['content'];


						echo $name[$index]." <br>".$avatar[$index]." <br>".$link[$index]."<br>".$content[$index]."<br>";

					}



		$db->close();
		exit();

		?>





			<footer>
			<div id="footer">
				Copyright &copy; 2019
			</div>
		</footer>
	</div>
</body>
</html>
