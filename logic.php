<?php

$homepage=file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html');

preg_match_all('/<li>\s*(\w*)\s*<\/li>/',$homepage,$word);

print_r($word);

?>
