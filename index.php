<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylesaleth.css">
	<title>Outil de révision des tables de multiplication</title>
</head>
<body>
	
<h2>la table de 3</h2>	
<?php

for ($i=0; $i <= 10; $i++) { 
 	
	echo '3 * ' .$i. ' = ' .($i * 3). '<br>';
 
}

?>

<h2>La table de ?</h2>
<form method="post" action="index.php">
	<label>Tapez un chiffre entre 0 et 10 pour voir apparaître sa table de multiplication</label>
	<input type="text" name="table">
	<input type="submit" name="valider"></input>
	</form>

<?php
if(isset($_POST['valider'])){
	$i = intval($_POST['table']);
	if ($i == ''){
		echo ' ';
	} else {
		for ($j=0; $j <= 10; $j++) { 
			echo $i. ' * ' .$j. ' = '.$i * $j.'<br>';
		}
	}
}
?>

<h2>La table de ? 2.0</h2>
<form method="GET" action="index.php">
	<select name="selectionTable">
		<option value="0"></option>
		<option value="1"></option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		
	</select>
</form>
<!--  for ($i=0; $i <= 10; $i++) {
	for ($j=0; $j <= 10; $j++) { 
 	
 	echo $j. '*' .$i. '=' .$i * $j.'<br>';
  } 
 } -->

</body>
</html>