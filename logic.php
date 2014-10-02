<?php

//$num_words = $_GET["num_words"]


for($i=1; $i<=29; $i=$i+2){
$dictionary=$dictionary.file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-'.(sprintf("%02s", $i)).'-'.(sprintf("%02s", $i+1)).'-hundred.html');
}

preg_match_all('/<li>\s*(\w*)\s*<\/li>/',$dictionary,$word);

print_r($word);

//for ($i=0; $i<$num_words; $i++) {
	
//}

?>
