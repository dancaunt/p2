<?php

$num_words = $_GET["num_words"];

if ($num_words){

for($i=1; $i<=29; $i=$i+2){
	$dictionary=$dictionary.file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-'.(sprintf("%02s", $i)).'-'.(sprintf("%02s", $i+1)).'-hundred.html');
}

preg_match_all('/<li>\s*(\w*)\s*<\/li>/',$dictionary,$word);

for ($i=0; $i<$num_words-1; $i++) {
	$pass = $pass.$word[1][rand(0,max(array_map('count', $word))-1)].'-';	
}
$pass = $pass.$word[1][rand(0,max(array_map('count', $word))-1)];

if($_GET["include_symbol"])
	$pass = $pass.chr(rand(33,47));
if($_GET["include_number"])
	$pass = $pass.rand(0,9);
} else 

$pass = "";

?>
