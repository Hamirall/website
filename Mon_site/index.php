<?php include 'layout/header.php' ?>

<div class="img-head">
	<img src="img/programmation.png" alt="image de programmation">
</div>

<div class="pres">
	<h1>Présentation</h1>
		<hr>
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


<div class="real">
	<h1>Mes réalisations</h1>
	
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
	<h2>Contact</h2>
	
	<hr>
		
	<form action="#" methode="post">
	
	<div class="form-group">
	    
	    <label>Votre email </label>

	    <input type="email" class="form-control" col="3" placeholder="email@exemple.com">
		<label>Votre nom</label>
	    <input type="text" class="form-control" placeholder="Nom">

	    <label>Votre prénom</label>
	    <input type="email" class="form-control" placeholder="Prénom">

	    <label id="label-msg">Votre mesage</label>
	    <textarea rows="5"></textarea>
		
		<div class="button">
	    	<button class="btn btn-primary" type="submit">Envoyer</button>
		</div>
	</div>

</form>

</div>




<?php include 'layout/footer.php' ?>