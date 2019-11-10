<form action="scrap.php" method="post">
<input type="submit" name ="get_data" value="Get data"/> 
</form>

<?php
	include('simple_html_dom.php');
	
	$html = file_get_html('https://regina.ctvnews.ca/federal-election-2019/regina-wascana');

	echo $html->find('title', 0)->plaintext;
	echo "<br>";

	$list = $html-> find('div[class="WYSIWYGPageEditor"]' ,0);

	$list_array = $list->find('p');
//	$p_array = $list->find('strong');

	$linkAvatarIndex = 0;
	$contentIndex = -1;
	for($i=0 ; $i < sizeof($list_array) ; $i++){
		echo $list_array[$i];
		
		if($i == 0 || $i == 8 || $i == 15 || $i == 24 || $i == 32){
			$link[$linkAvatarIndex] = $list_array[$i];
		}
		if($i == 1 || $i == 9 || $i == 16 || $i == 25 || $i == 33){
			$avatar[$linkAvatarIndex] = $list_array[$i];
			$linkAvatarIndex++;
			$contentIndex++;
		}
		if($i >= 2 && $i <= 7 || $i >= 10 && $i <= 14 || $i >= 18 && $i <= 23 || $i >= 26 && $i <= 31 || $i >= 35 && $i <= 40){
			$content[$contentIndex] =  $content[$contentIndex].$list_array[$i];
		}
		/* echo "<br>";
		//echo $p_array[$i];
		echo "<br>";

		$list2 = $list_array[$i]->find('li');
		
		for($j=0 ; $j < sizeof($list2) ; $j++){
			echo $list2[$j];
			echo "<br>";
		
		}  */
	}
	$name = array("Ralph Goodale", "Michael Kram", "Hailey Clark", "Tamela Friesen", "Mario Milanovski");
/* 	for($index = 0; $index < sizeof($name); $index++){
		echo $index;
		echo $name[$index]." <br>".$avatar[$index]." <br>".$link[$index]."<br>".$content[$index]."<br>";
	} */

	if (isset($_POST["get_data"]) && $_POST["get_data"]){
		
		$db = new mysqli("localhost", "liu725", "liuxiny", "liu725");
		if ($db->connect_error)			//check errors
		{
			die ("Connection failed: " . $db->connect_error);
			echo "Connection failed";
		}
		//command to insert the content to database
		for($index = 0; $index < 5; $index++){
			//$content[$index] = addslashes($content[$index]);
			$link[$index] = addslashes($link[$index]);
			echo $index;
			echo $name[$index]." <br>".$avatar[$index]." <br>".$link[$index]."<br>".$content[$index]."<br>";
			$q = "insert into candidate (election_ID, name, avatar, info, link) values ('1', '$name[$index]', '$avatar[$index]', '$content[$index]', '$link[$index]')";
			$r = $db->query($q);
			if ($r === true)		//check is it worked or not
			{
				echo "Successful gathering data<br>";
			}
			else{
				echo "Unsuccessful gathering data<br>";
				echo("Error description: " . mysqli_error($db));
			}
		}
		$db->close();
		exit();
	}

?> 
