<?php 

session_start();

function veriInput() {
	
	if (!empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['message'])) {
		
		header("Location:../index.php");
		$_SESSION['success_message'] = "Votre message à bien été envoyé";
	} 

	else {
		header("Location:../index.php");
		$_SESSION['error_message'] = "Merci de saisir toutes les données";
	}

}


function envoiMail() {

	var_dump("mail");

}

veriInput();

