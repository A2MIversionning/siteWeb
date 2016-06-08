<!DOCTYPE html>
<html>
	<form action="mailto:votrenom@provider.com" method="post" name="contact">
	
		<!--En tête de la page -->
		
		<head> 
			<meta charset="utf-8" />
		</head>
		
		<!--Corps de la page -->
		
		<body>
		
			<!--fais appel à la page haut2.php grâce à la méthode 'include'-->
		
			<?php
				include ('../include/haut2.php');
			?>
			
			<!--Affiche le titre de la page-->
			
			<div id='ecritureHaut'>
				<div id='centerb1'>
					<font color='white' size='7'>Contact</font></br>
				</div>
			</div>
			
			<!--fais appel à la page menu2.php grâce à la méthode 'include'-->
			
			<?php
				include ('../include/menu2.php');
			?>
			
			<!--Le code du formulaire-->
			
			<a href="#situer">Situer l'entreprise</a>		
			<center>
			<h3>Formulaire Contact</h3>
			<label>Votre nom* <br/><input type="text" name="Nom" required></label><br/><br/>
			<label>Votre prénom* <br/><input type="text" name="prenom" required></label><br/><br/>
			<label>Votre société <br/><input type="text" name="societe" /></label><br/><br/>
			<label>Votre adresse* <br/><input type="text" name="adresse" required></label><br/><br/>
			<label>Votre code postal* <br/><input type="text" name="postal" required></label><br/><br/>
			<label>Votre ville*<br/> <input type="text" name="ville" required></label><br/><br/>
			<label>Votre numéro de téléphone<br/> <input type="text" name="tel" /></label><br/><br/>	
			<label>Votre adresse e-mail* <br/><input type="text" name="email" required></label><br/><br/>
			
			
			<h4>Objet de votre demande*</h4>
			<input type="radio" name="choix" value="Demande de devis" required> Demande de devis<br/>
			<input type="radio" name="choix" value="Demande d'informations"required> Demande d'informations<br/>
			<input type="radio" name="choix" value="Autres"required> Autres<br/><br/>
			<label>Votre message<br/> <textarea name="message" rows="2" cols="20"required></textarea></label><br/><br/>
			<input type="submit" value="Envoyer"><br/><br/>
			<i>* Champs obligatoires</i><br/>
			
			<!--Informations de la société-->
			
			Société A&M<br/>
			10-14 Rue Jean Perrin<br/>
			17000 La Rochelle<br/>
			tel:<br/>
			mail:<br/>
			<br/>
			
			<!--Affiche la google maps mais le 'div' ici permet grâce à un bouton plus haut de se venir directement sur la carte-->
			
			<div id='situer'>
				<iframe class='image' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2764.510500826513!2d-1.1606506842403663!3d46.14057969607641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480153c3ce366eb1%3A0xa8d4c57b22fe53c7!2sRue+Jean+Perrin%2C+17000+La+Rochelle!5e0!3m2!1sfr!2sfr!4v1464162679866" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></center>
				<br/>
			</div>
			
			<!--fais appel à la page bas2.php grâce à la méthode 'include'-->
			
			<?php
				include ('../include/bas2.php');
			?>
		</body>
	</form>
</html>