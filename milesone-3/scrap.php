<?php
	include('simple_html_dom.php');

	$html = file_get_html('https://regina.ctvnews.ca/federal-election-2019/regina-wascana');

	echo $html->find('title', 0)->plaintext;
	echo "<br>";

	$list = $html-> find('div[class="WYSIWYGPageEditor"]' ,0);

	$list_array = $list->find('p');
	//$p_array = $list->find('strong');
	for($i=0 ; $i < sizeof($list_array) ; $i++){
		
		echo $list_array[$i];
		//echo $p_array[$i];
		//echo "<br>";

		//$list2 = $list_array[$i]->find('li');
		
		//for($j=0 ; $j < sizeof($list2) ; $j++){
		//	echo $list2[$j];
		//	echo "<br>";
		
		//} 
	}
   

?> 