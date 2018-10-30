<?php
	if (isset($_POST['submitReponseAjax'])){
		$_SESSION['bonneReponseAjax'] = $_POST['resultatAjax'];
		$_SESSION['reponseDeLEleveAjax'] = $_POST['reponseEleveAjax'];
		$_SESSION['operationQuestionAjax'] = $_POST['operationAjax'];

		if ($_SESSION['reponseDeLEleveAjax'] == $_SESSION['bonneReponseAjax']) {
			echo 'Bonne réponse! La solution était bien '.$_SESSION['operationQuestionAjax']; 
			echo $_SESSION['bonneReponseAjax'].'. Choisis une autre table de multiplication.';
		} else {
			echo "Mauvaise réponse! Tu as répondu ".$_SESSION['reponseDeLEleveAjax'].' alors que la bonne réponse était : '.$_SESSION['operationQuestionAjax']; 
			echo $_SESSION['bonneReponseAjax'].'. Choisis une autre table de multiplication.';
		}
	}

	?>	