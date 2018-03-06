<?php 

session_start();
	
	if(isset($_SESSION['error_message'])) {
	    $error = $_SESSION['error_message'];
	    unset($_SESSION['error_message']);
	}
	
	if(isset($_SESSION['success_message'])) {
	    $success = $_SESSION['success_message'];
	    unset($_SESSION['success_message']);
}

include 'layout/header.php' 

?>

<div class="img-head">
	<img src="img/programmation.png" alt="image de programmation" id="img">
</div>

<div class="pres">
	<h1 id ="pres">Présentation</h1>
		<hr>
		<div id="fond">
		<section>
			<p>
				Je m'appel François, j'ai 21 ans. Je suis étudiant en développement informatique plus particuliérement dans le web.
				Je suis à la recherche d'un stage pour valider ma prémière année. Mon stage est d'une durée de 3 mois minimum, et 5 mois maximum.
				Le stage commence le 3 avril et fini le 31 août.

				Juste en dessous vous pouvez voir mes réalisations.

				Si vous êtes intéressé, vous pouvez me contacter via l'onglet contact.
			</p>
		</section>
	</div>
</div>


<div class="real">
	<h1 id="real">Mes réalisations</h1>
	
	<hr>
		
	<div class="card-deck">
		  
		  <div class="card">
		    <img class="card-img-top" src="..." alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		      <a href="#" class="btn btn-primary">Exemple</a>
		    </div>
		  </div>
		
		  <div class="card">
		    <img class="card-img-top" src="..." alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		      <a href="#" class="btn btn-primary">Exemple</a>
		    </div>
		  </div>
		  
		  <div class="card">
		    <img class="card-img-top" src="..." alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
		       <a href="#" class="btn btn-primary">Exemple</a>
		    </div>
		  
		  </div>
		</div>
	</div>



<div class="contact">
	<h2 id="contact">Contact</h2>
	
	<hr>
		
	<?php if(isset($error)): ?>
		<div class="alert alert-warning" role="alert">
		    <?php echo $error ?>
		</div>
    <?php endif; ?>

   	<?php if(isset($success)): ?>
	    <div class="alert alert-success" role="alert">
	        <?php echo $success ?>
	    </div>
    <?php endif; ?>
		


	<div class="form-group">

	
	<form action="libs/mail.php" method="post">
	    
	    <label>Votre email <span id="obligation">*</span></label>
	    <input type="email" class="form-control" col="3" placeholder="email@exemple.com" name="email" value="dupont@gmail.com">
		
		<label>Votre nom <span id="obligation">*</span></label>
	    <input type="text" class="form-control" placeholder="Nom" name="nom" value="Dupont">

	    <label>Votre prénom <span id="obligation">*</span></label>
	    <input type="text" class="form-control" placeholder="Prénom" name="prenom" value="Lupin">

	    <label id="label-msg">Votre mesage <span id="obligation">*</span></label>
	    <textarea rows="5" name="message"></textarea>
		
		<div class="button">
	    	<button class="btn btn-primary" type="submit">Envoyer</button>
		</div>
		
		</div>
	</form>


</div>



<div class="plus">
	<h5>En savoir plus</h5>
		<ul>
			<li><a href="#">Mon Cv</a></li>
			<li><a href="#">Mon GitHub</a></li>
			<li><a href="#">Mon entreprise</a></li>
		</ul>
</div>

<?php include 'layout/footer.php' ?>