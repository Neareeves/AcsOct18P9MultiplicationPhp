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
<form method='post' action='index.php'>
	<select name='selectionTable'>
		<option value='0' selected>0</option>
		<option value='1'>1</option>
		<option value='2'>2</option>
		<option value='3'>3</option>
		<option value='4'>4</option>
		<option value='5'>5</option>
		<option value='6'>6</option>
		<option value='7'>7</option>
		<option value='8'>8</option>
		<option value='9'>9</option>
		<option value='10'>10</option>
		<input type='submit' name='validation'>
	</select>
</form>
<?php

if (isset($_POST['selectionTable'])){
	$listeOptions= array();
	$listeOptions=$_POST['selectionTable'];
	for ($i=0; $i< 11; $i++){
		

			echo $i. ' x ' .$listeOptions. '=' .$listeOptions * $i.'<br>';
	
}
}
// $listeOptions= array();
// $listeOptions =$_GET['selectionTable'];
		
	
// 	for ($i=0; $i < count($listeOptions); $i++) { 
// for ($j=0; $j <= 10; $j++) { 

// 		echo $j. '*' .$listeOptions[$i]. '=' .$listeOptions[$i] * $j.'<br>';
// 	} 
//  }


?>
<h2>La table de ? 2.0</h2>
<form>
	<label for="table0">La table du 0</label>
	<label for="table1">La table du 1</label>
	<label for="table2">La table du 2</label>
	<label for="table3">La table du 3</label>
	<label for="table4">La table du 4</label>
	<label for="table5">La table du 5</label>
	<label for="table6">La table du 6</label>
	<label for="table7">La table du 7</label>
	<label for="table8">La table du 8</label>
	<label for="table9">La table du 9</label>
	<label for="table10">La table du 10</label>
</form>
<!--  for ($i=0; $i <= 10; $i++) {
	for ($j=0; $j <= 10; $j++) { 
 	
 	echo $j. '*' .$i. '=' .$i * $j.'<br>';
  } 
 } -->

</body>
</html>