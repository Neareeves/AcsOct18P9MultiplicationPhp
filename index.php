<?php


?>

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
				if ($i == 10){

				}
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
	//$listeOptions= array();
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
	<h2>La table de ? 3.0</h2>

	<form method="post" action="index.php">
		<label for="table0" name="table0">La table du 0</label>
		<input type="checkbox" name="table[]" value="0"><br>
		<label for="table1" name="table1">La table du 1</label>
		<input type="checkbox" name="table[]" value="1"><br>
		<label for="table2" name="table2">La table du 2</label>
		<input type="checkbox" name="table[]" value="2"><br>
		<label for="table3" name="table3">La table du 3</label>
		<input type="checkbox" name="table[]" value="3"><br>
		<label for="table4" name="table4">La table du 4</label>
		<input type="checkbox" name="table[]" value="4"><br>
		<label for="table5" name="table5">La table du 5</label>
		<input type="checkbox" name="table[]" value="5"><br>
		<label for="table6" name="table6">La table du 6</label>
		<input type="checkbox" name="table[]" value="6"><br>
		<label for="table7" name="table7">La table du 7</label>
		<input type="checkbox" name="table[]" value="7"><br>
		<label for="table8" name="table8">La table du 8</label>
		<input type="checkbox" name="table[]" value="8"><br>
		<label for="table9" name="table9">La table du 9</label>
		<input type="checkbox" name="table[]" value="9"><br>
		<label for="table10" name="table10">La table du 10</label>
		<input type="checkbox" name="table[]" value="10"><br>
		<input type="submit" value="go!" name="validCheckbox"> 
	</form>
	<?php
//if (isset($_POST['validChecbox'])){
	foreach($_POST['table'] as $valeur){
		for ($j=0; $j <= 10; $j++) {
			if ($j == 10){

				echo $valeur. '*' .$j. '=' .$j * $valeur.'<br><br>';
			} else if ($j == 0){
				echo 'La table du ' .$valeur.' :<br><br>';
				echo $valeur. '*' .$j. '=' .$j * $valeur.'<br>';
			} else {
				echo $valeur. '*' .$j. '=' .$j * $valeur.'<br>';
			}

		}
	}
	?>
	<h2>Mode révision</h2>
	<form action="index.php" method="post">
		<label>Choisis une table de multiplication pour te tester</label><br>
		<label for="revision">Table du 0</label>
		<input type="radio" name="revision[]" value="0"><br>
		<label for="revision">Table du 1</label>
		<input type="radio" name="revision[]" value="1"><br>
		<label for="revision">Table du 2</label>
		<input type="radio" name="revision[]" value="2"><br>
		<label for="revision">Table du 3</label>
		<input type="radio" name="revision[]" value="3"><br>
		<label for="revision">Table du 4</label>
		<input type="radio" name="revision[]" value="4"><br>
		<label for="revision">Table du 5</label>
		<input type="radio" name="revision[]" value="5"><br>
		<label for="revision">Table du 6</label>
		<input type="radio" name="revision[]" value="6"><br>
		<label for="revision">Table du 7</label>
		<input type="radio" name="revision[]" value="7"><br>
		<label for="revision">Table du 8</label>
		<input type="radio" name="revision[]" value="8"><br>
		<label for="revision">Table du 9</label>
		<input type="radio" name="revision[]" value="9"><br>
		<label for="revision">Table du 10</label>
		<input type="radio" name="revision[]" value="10"><br>
<input type="submit" name="validRadio">
	</form>

	<?php
foreach($_POST['revision'] as $choixDeLaTable){
$randomNumber = rand(0,10);
//global $randomNumber;
// $choixDeLaTable;
echo $choixDeLaTable. ' x ' .$randomNumber. ' =' .($choixDeLaTable*$randomNumber);
	//session
}
// 	$i=0;
// 	while ($i <= 10) {
// 		$i++;
// 		//$randomNumber = int rand(0,10)
// 		echo $choixDeLaTable. '*' .$i. '=' .$i * $choixDeLaTable.'<br>';
// }
// 	}
	?>
 <form id="formulaireReponseRevision" style="display: inline">
 	<input style="display: none" type="text" name="resultat" value="<?php echo $choixDeLaTable*$randomNumber ?>">
	<input type="text" id="inputReponse" placeholder="tape la réponse ici">
		<input type="submit" name="validReponseRevision">
	</form>

<?php
if (isset($_POST['validReponseRevision'])){
	if ($_POST['validReponseRevision'] == ($choixDeLaTable*$randomNumber)) {
		echo 'you won';
	} else {
		echo "ce n'est pas la bonne réponse";
	}
}
// if (isset($_POST['validReponseRevision'])){
// 	$reponseRevision = $_POST['validReponseRevision'];
// 	if (($randomNumber * $choixDeLaTable) == intval($reponseRevision)) {
// 		echo 'bravo';
// 	} else {
// 		echo "you suck";
// 	}
// }

?>	
<!-- script type="text/javascript">
	let bonneReponse = document.getElementById('reponseSpan');
	let reponseEleve = document.getElementById('inputReponse');
	if (parseInt(bonneReponse) == parseInt(reponseEleve)) {
		alert(' c bien tu as trouvé');
	} else {
		alert('c faux');
	}
</script> -->
<!--  for ($i=0; $i <= 10; $i++) {
	for ($j=0; $j <= 10; $j++) { 
 	
 	echo $j. '*' .$i. '=' .$i * $j.'<br>';
  } 
} -->

</body>
</html>