<?php 

// Variable de session
session_start();
	
	if(isset($_SESSION['error_message'])) {
	    $error = $_SESSION['error_message'];
	    unset($_SESSION['error_message']);
	}
	
	if(isset($_SESSION['success_message'])) {
	    $success = $_SESSION['success_message'];
	    unset($_SESSION['success_message']);
}

// Inclus le fchier header.php qui contient le header de la page
include 'layout/header.php' ?>

<div class="img-head">

	<!-- Condition qui affiche un message d'erreur si tous les champs ne sont pas remplis -->
 	<?php if(isset($error)): ?>
	    <div class="alert alert-warning" role="alert">
	        <?php echo $error ?>
	    </div>
    <?php endif; ?>

	<!-- Condition qui affiche un message de confirmation si le mail à pu s'evnoyer -->
   	<?php if(isset($success)): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $success ?>
        </div>
    <?php endif; ?>

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


		<div class="col-xs-6 col-lg-4"> 
		  <div class="card">
		    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
		    <div class="card-body">
		      <h5 class="card-title">Switcher</h5>
		      <p class="card-text">Switcher est un projet réalisé dans le cadre de ma formation.
		      C'est une application web qui permet de calculer l'adressage ip</p>
		      	<h6>Techno</h6>
				      <ul>
				      	<li>HTLML / CSS</li>
				      	<li>Bootsrap</li>
				      	<li>JavaScript</li>
				      </ul>
		      <a href="https://github.com/Hamirall/Switcher" class="btn btn-primary" onclick="window.open(this.href); return false;">Voir le code</a>
		    </div>
		  </div>
		  </div>
		


		<div class="col-xs-6 col-lg-4"> <!-- Class qui permet d'adapter les card en fonction de l'écran de l'utilisateur -->
		  <div class="card">
		   <!--  <img class="card-img-top" src="..." alt="Card image cap"> -->
		    <div class="card-body">
		      <h5 class="card-title">AperiRond</h5>
		      <p class="card-text">AperiRond est un site ecommerce, développé en 2 jours.
		      Possibilité de s'inscrire et de commander.</p>
		      	<h6>Techno</h6>
				      <ul>
				      	<li>HTLML / CSS</li>
				      	<li>Bootsrap</li>
				      	<li>PHP</li>
				      	<li>MySql</li>
				      </ul>
		      <a href="https://github.com/Hamirall/AperiRond" class="btn btn-primary" onclick="window.open(this.href); return false;">Voir le code</a>
		    </div>
		  </div>
		  </div>
		  
		<div class="col-xs-12 col-lg-4	"> <!-- Class qui permet d'adapter les card en fonction de l'écran de l'utilisateur -->
		  <div class="card">
		    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
		    <div class="card-body">
		      <h5 class="card-title">Cold reading (En cour)</h5>
		      <p class="card-text">Platforme pour apprendre le cold reading avec des exercices et des corrections, apprentissage en communauté.</p>
		      <h6>Techno</h6>
				    <ul>
				      	<li>HTLML / CSS</li>
				      	<li>Bootsrap</li>
				      	<li>PHP</li>
				      	<li>JQuery</li>
				      	<li>MySql</li>
				    </ul>
				<p id="maquette">Maquettage en cour</p>
		       <!-- <a href="#" class="btn btn-primary">Voir le code</a> -->
		    </div>
		  
		  </div>
		</div>
	</div>
	</div>


<div class="contact">
	<h2 id="contact">Contact</h2>
	
	<hr>

	<div class="form-group">

	<!-- Formulaire de contact qui lance le fichier mail.php et exécute les fonctions -->
	<form action="libs/mail.php" method="post">

		<legend>Obligation de remplir le champ quand il y a un <span id="obligation">*</span></legend>
	    
	    <label>Votre email <span id="obligation">*</span></label>
	    <input type="email" class="form-control" col="3" placeholder="email@nomdomaine.com" name="email">
		
		
		<label>Votre nom <span id="obligation">*</span></label>
	    <input type="text" class="form-control" placeholder="Nom" name="nom">

	    <label>Votre prénom <span id="obligation">*</span></label>
	    <input type="text" class="form-control" placeholder="Prénom" name="prenom">

	    <label>Votre demande <span id="obligation">*</span></label>
	    <input type="text" class="form-control" col="3" placeholder="L'objet de votre demande" name="demande">

	    <label id="label-msg">Votre mesage <span id="obligation">*</span></label>
	    <textarea rows="5" name="message" placeholder="Votre demande"></textarea>
		
		<div class="button">
	    	<button class="btn btn-primary" type="submit">Envoyer</button>
		</div>
		
	</div>
	</form>
</div>

<!-- Inclus le fichier footer.php qui contient le footer -->
<?php include 'layout/footer.php' ?>