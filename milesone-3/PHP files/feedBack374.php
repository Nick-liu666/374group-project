<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="out374.css">
	<script type = "text/javascript" src = "validate.js"></script>
	<title>Feedback</title>
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
				<form id="feedback_create" method="post">
					<h3>Type your feedback:-  </h3><br>

					<textarea name="message" cols="120" rows="10" placeholder="Type your message here.."></textarea>

			<label id="textarea_message" class="error_message"> </label>

			<p id="charCount"></p>

					<form id="button" method="post">
            <p>
            <input type="submit" name="submit" value="submit" />
            <input type="reset" name="reset" value="reset" /></p>
    </form>

				</form>
		</div>

		<div id="rate">	</div>


		<script type = "text/javascript" src = "feedback_r.js"></script>
		<footer>
		<div id="footer">
			Copyright &copy; 2019
		</div>
	</footer>
	</div>
</body>
</html>
