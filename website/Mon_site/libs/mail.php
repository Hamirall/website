<?php 

session_start();

function veriInput() {
	
	if (!empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['message']) && !empty($_POST['demande'])) {
		
		email();
	} 

	else {
		header("Location: ../index.php");
		$_SESSION['error_message'] = "Merci de saisir toutes les données";
	}

}


function email() {

 	
 	$expediteur = stripslashes(trim($_POST['email'])); 
    $nom = stripslashes(trim($_POST['nom'])); 
    $prenom = stripslashes(trim($_POST['prenom']));  
    $message = stripslashes(trim($_POST['message']); 
    $sujet = stripcslashes(trim($_POST['demande']);

    /* Destinataire (votre adresse e-mail) */
$to = 'testfonctionmail@gmail.com';
 
/* Construction du message */
$msg  = 'Bonjour je suis,'. $nom ."\n";
$msg .= "l'objet de mon message est " . $sujet."\n";
$msg .= 'Ce mail a été envoyé depuis Hamirall.com par : '.$nom."\n\n";
$msg .= 'Voici le message qui vous est adressé :'."\n";
$msg .= '***************************'."\n";
$msg .= $message."\n";
$msg .= '***************************'."\n";
 
/* En-têtes de l'e-mail */
$headers = 'From: <'.$expediteur.">\n";
/* Envoi de l'e-mail */
mail($to, $msg, $headers);

header("Location: ../index.php");
$_SESSION['success_message'] = "Votre message à bien été envoyé";

}

veriInput();

