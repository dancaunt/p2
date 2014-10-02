<html>
<head>

<title>Daniel Caunt P2 - xkcd Password Generator</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet' href='bootstrap.min.css' type='text/css'>
<link href="bootstrapflatly.min.css" rel="stylesheet">
<link rel='stylesheet' href='style.css' type='text/css'>

</head>
<body>

<?php require 'logic.php';?>

<div class="container">
<h1>xkcd Password Generator</h1>

<p class='password'>password</p>

<form method='GET' action='index.php'>
<p class='options'>

<label for='num_words'># of Words (Max 9)</label>
<input maxlength=1 type='text' name='num_words' id='num_words' value='4'>
<br>
<input type='checkbox' name='include_number' id='include_number' >
<label for='include_number'>Include a number</label>
<br>
<input type='checkbox' name='include_symbol' id='include_symbol' >
<label for='include_symbol'>Include a symbol</label>
</p>

<input type='submit' value='Generate Password'>
</form>

<a href='http://xkcd.com/936/'>xkcd password strength</a><br><br>

<a ref='http://xkcd.com/936'><img class=comic src='http://imgs.xkcd.com/comics/password_strength.png'></a>

</div>
</body>
</html>
