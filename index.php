<?php
session_start();

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale-1">
	<title>Outil de révision des tables de multiplication</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="stylesaleth.css">

</head>
<body>
	<section>
		<h1>Révise tes tables de multiplication dans l'fun!</h1>
		<h2>la table de 3</h2>	
		<?php


		for ($i=0; $i <= 10; $i++) { 

			echo '3 * ' .$i. ' = ' .($i * 3). '<br>';

		}

		?>

		<h2>La table de ?</h2>
		<form method="GET" action="index.php">
			<label>Tapez un chiffre entre 0 et 10 pour voir apparaître sa table de multiplication</label>
			<input type="text" name="table">
			<input type="submit" name="valider"></input>
		</form>

		<?php
		if(isset($_GET['valider'])){
			$i = intval($_GET['table']);
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
		<!-- GET fait apparaître les variables dans l'url -->
		<h2>La table de ? 2.0</h2>
		<form method='post' action='index.php'>
			<select name='selectionTable' multiple>
				<option value="" disabled selected>Choose your option</option>
				<option value='0'>0</option>
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
			<p>
				<label for="table0" name="table0">
					<input type="checkbox" id="table0 name="table[]" value="0">
					<span>La table du 0</span>
				</label>
			</p>
			<p>
				<label for="table1" name="table1">
					<input type="checkbox" name="table[]" id="table1" value="1">
					<span>La table du 1</span>
				</label>
			</p>
			<p>
				<label for="table2" name="table2">
					<input type="checkbox" name="table[]" value="2" id="table2" id="indeterminate-checkbox" >
					<span>La table du 2</span>
				</label>
			</p>
			<p>
				<label for="table3" name="table3">
					<input id="table3"  type="checkbox" name="table[]" value="3">
					<span>La table du 3</span>
				</label>
			</p>
			<p>
				<label for="table4" name="table4">
					<input id="table4"  type="checkbox" name="table[]" value="4">
					<span>La table du 4</span>
				</label>
			</p>
			<p>
				<label for="table5" name="table5">
					<input id="table5" type="checkbox" name="table[]" value="5">
					<span>La table du 5</span>
				</label></p>
				<p>
					<label for="table6" name="table6">
						<input id="table6" type="checkbox" name="table[]" value="6">
						<span>La table du 6</span>
					</label>
				</p>
				<p>
					<label for="table7" name="table7">
						<input id="table7" type="checkbox" name="table[]" value="7">
						<span>La table du 7</span>
					</label>
				</p>
				<p>
					<label for="table8" name="table8">
						<input id="table8" type="checkbox" name="table[]" value="8">
						<span>La table du 8</span>
					</label>
				</p>
				<label for="table9" name="table9">
					<input id="table9"type="checkbox" name="table[]" value="9">
					<span>La table du 9</span>
					<p>

						<label for="table10" name="table10">
							<input id="table10"type="checkbox" name="table[]" value="10">
							<span>La table du 10</span>
						</label>
					</p>
					<input type="submit" value="go!" name="validCheckbox"> 
				</form>
				<?php
				if (isset($_POST['validCheckbox'])){
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
				}
				?>
				<h2>Mode révision</h2>
				<form action="index.php" method="post">	<label>Choisis une table de multiplication pour te tester</label><br>


					<p>
						<label>
							<input type="radio" class="with-gap" name="revision[]" value="0">
							<span>La table du 0</span>
						</label>
					</p>
					<p>
						<label>
							<input type="radio" class="with-gap" name="revision[]" value="1">
							<span>La table du 1</span>
						</label>
					</p>
					<p>
						<label>
							<input type="radio" class="with-gap" name="revision[]" value="2">
							<span>La table du 2</span>
						</label>
					</p>
					<p>
						<label>
							<input type="radio" class="with-gap" name="revision[]" value="3">
							<span>La table du 3</span>
						</label>
					</p>
					<p>
						<label>
							<input type="radio" name="revision[]" value="4">
							<span>La table du 4</span>
						</label>
					</p>
					<p>
						<label>
							<input type="radio" name="revision[]" value="5">
							<span>La table du 5</span>
						</label>
					</p>
					<p>
						<label>
							<input type="radio" name="revision[]" value="6">
							<span>La table du 6</span>
						</label>
					</p>
					<p>
						<label>
							<input type="radio" name="revision[]" value="7">
							<span>La table du 7</span>
						</label>
					</p>
					<p>
						<label>
							<input type="radio" name="revision[]" value="8">
							<span>La table du 8</span>
						</label>
					</p>
					<p>
						<label>
							<input type="radio" name="revision[]" value="9">
							<span>La table du 9</span>
						</label>
					</p>
					<p>
						<label>
							<input type="radio" name="revision[]" value="10">
							<span>La table du 10</span>
						</label>
						
					</p>
					<input type="submit" name="validRadio">
				</form>

				
				<?php
				if (isset($_POST['revision'])){

					foreach($_POST['revision'] as $choixDeLaTable){
						$randomNumber = rand(0,10);

						echo $choixDeLaTable. ' x ' .$randomNumber. ' =';


					}
				}
// 	$i=0;
// 	while ($i <= 10) {
// 		$i++;
// 		//$randomNumber = int rand(0,10)
// 		echo $choixDeLaTable. '*' .$i. '=' .$i * $choixDeLaTable.'<br>';
// }
// 	}
				?>
				<form id="formulaireReponseRevision" method="post" action="index.php" style="display: inline">

					<input style="display: inline-block;" type="text" name="operation" value="<?php 
					if (isset($choixDeLaTable)){
						echo $choixDeLaTable.' x '.$randomNumber.' = ';} ?>">
						<input style="display: none" type="text" name="resultat" value="<?php echo $choixDeLaTable*$randomNumber ?>">
						<input type="text" id="inputReponse" placeholder="tape la réponse ici" name="reponseEleve">
						<input type="submit" name="validReponseRevision">
					</form>

					<?php
					if (isset($_POST['validReponseRevision'])){
						$_SESSION['bonneReponse'] = $_POST['resultat'];
						$_SESSION['reponseDeLEleve'] = $_POST['reponseEleve'];
						$_SESSION['operationQuestion'] = $_POST['operation'];

						if ($_SESSION['reponseDeLEleve'] == $_SESSION['bonneReponse']) {
							echo 'Bonne réponse! La solution était bien '.$_SESSION['operationQuestion']; 
							echo $_SESSION['bonneReponse'].'. Choisis une autre table de multiplication.';
						} else {
							echo "Mauvaise réponse! Tu as répondu ".$_SESSION['reponseDeLEleve'].' alors que la bonne réponse était : '.$_SESSION['operationQuestion']; 
							echo $_SESSION['bonneReponse'].'. Choisis une autre table de multiplication.';
						}
					}

					?>	
				</section>















				<section>

					<h2>Mode révision, avec Ajax plus blanc que blanc</h2>
					<form action="index.php" method="post">

						<label>Choisis une table de multiplication pour te tester</label><br>
						<p>

							<label>
								<input type="radio" name="revisionAjax[]" value="0">
								<span>La table du 0</span>
							</label>
							<p>
							</p>
							<label>
								<input type="radio" name="revisionAjax[]" value="1">
								<span>La table du 1</span>
							</label>
						</p>
						<p>
							<label>
								<input type="radio" name="revisionAjax[]" value="2">
								<span>La table du 2</span>
							</label>
						</p>
						<p>
							<label>
								<input type="radio" name="revisionAjax[]" value="3">
								<span>La table du 3</span>
							</label>
						</p>
						<p>
							<label>
								<input type="radio" name="revisionAjax[]" value="4">
								<span>La table du 4</span>
							</label>
						</p>
						<p>
							<label>
								<input type="radio" name="revisionAjax[]" value="5">
								<span>La table du 5</span>
							</label>
						</p>
						<p>
							<label>
								<input type="radio" name="revisionAjax[]" value="6">
								<span>La table du 6</span>
							</label>
						</p>
						<p>
							<label>
								<input type="radio" name="revisionAjax[]" value="7">
								<span>La table du 7</span>
							</label>
						</p>
						<p>
							<label>
								<input type="radio" name="revisionAjax[]" value="8">
								<span>La table du 8</span>
							</label>
						</p>
						<p>
							<label>
								<input type="radio" name="revisionAjax[]" value="9">
								<span>La table du 9</span>
							</label>
						</p>
						<p>
							<label>
								<input type="radio" name="revisionAjax[]" value="10">
								<span>La table du 10</span>
							</label>
						</p>
						<input type="submit" name="validRadio">
					</form>

					<?php
					if (isset($_POST['revisionAjax'])){


						foreach($_POST['revisionAjax'] as $choixDeLaTableAjax){
							$randomNumberAjax = rand(0,10);

							echo $choixDeLaTableAjax. ' x ' .$randomNumberAjax. ' ='.$choixDeLaTableAjax*$randomNumberAjax;


						}
					}

					?>
					<form method="post" action="index.php">
						<input style="display: inline-block;" type="text" name="operationAjax" value="<?php 
					if (isset($choixDeLaTableAjax)){
						echo $choixDeLaTableAjax.' x '.$randomNumberAjax.' = ';} ?>">
						<input style="display: inline-block;" type="text" name="resultatAjax" value="<?php echo $choixDeLaTableAjax*$randomNumberAjax ?>">
						<input type="text" id="reponseElevePrVariable" name="reponseEleveAjax">
						<input id="submitreponseAjax" onclick='loadDoc();return false;' type="submit" name="submitReponseAjax" value="Je me teste">
					</form>

					<div id="bonneReponseBravo"></div>
					<div id="mauvaiseReponsePasBravo"></div>
					<!-- <input type="button" onclick='loadDoc()'>fdfsdsfd</input> -->
			
<script>
	let variable = document.getElementById('reponseElevePrVariable').value;
//	console.log(variable);
							function loadDoc(){
								var xhttp = new XMLHttpRequest();


							xhttp.onreadystatechange = function() {
								if (this.readyState == 4 && this.status == 200){
									document.getElementById('bonneReponseBravo').innerHTML= this.responseText;
								}
							}



								xhttp.open("POST", "check.php", true);
								xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
								xhttp.send('submitReponseAjax=' + variable);
								//console.log(variable);
							}

// function submitForm()
// { 
//   var xhr=createXHR();
//   xhr.open("GET", "ajax.txt",true);
//   xhr.onreadystatechange=function(){ 
//     if(xhr.readyState == 4)
//     {
//       document.getElementById("bonneReponseBravo").innerHTML= xhr.responseText;	
//     } 
//   }; 
//   xhr.send(null); 
// }
// submitForm();

// $(document).ready(function(){
// 	$("#submitreponseAjax").click(function(){
// 		$.ajax({url: "ajax.html", success: function(cocorico){
// 			$("#bonneReponseBravo").html(cocorico);
// 		}});
// 	});
// });




// $("#ajax.html").click(function(){

//     $.ajax({
//        url : 'ajax.html',
//        type : 'GET',
//        dataType : 'html',
//        success : function(code_html, statut){
//        	 $(code_html).appendTo("#bonneReponseBravo"); 
//        },

//        error : function(resultat, statut, erreur){
//        },
//        complete : function(resultat, statut){
//        }
//     });
//    });
</script>



<h1>Mode super révision</h1>
<?php


$randomNumber1 = rand(1,10);
$randomNumber2 = rand(1,10);
$randomNumber3 = rand(1,10);
$randomNumber4 = rand(1,10);
$randomNumber5 = rand(1,10);
$randomNumber10 = rand(1,10);
$randomNumber20 = rand(1,10);
$randomNumber30 = rand(1,10);
$randomNumber40 = rand(1,10);
$randomNumber50 = rand(1,10);
echo $randomNumber1.' * ' .$randomNumber10. ' = ' .($randomNumber10 * $randomNumber1). '<br>';
echo $randomNumber2.' * ' .$randomNumber20. ' = ' .($randomNumber20 * $randomNumber2). '<br>';
echo $randomNumber3.' * ' .$randomNumber30. ' = ' .($randomNumber30 * $randomNumber3). '<br>';
echo $randomNumber4.' * ' .$randomNumber40. ' = ' .($randomNumber40 * $randomNumber4). '<br>';
echo $randomNumber5.' * ' .$randomNumber50. ' = ' .($randomNumber50 * $randomNumber5). '<br>';

// var xhr = new XMLHttpRequest();
// .xhr.open('GET', 'ajax.xml');
// XMLHttpRequest


?> 
</section>
</body>
</html>