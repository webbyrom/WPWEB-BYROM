<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Commentaires</title>

		<style type="text/css">

		body {
			color: #DFDFDF;
			background-color: #151515;
		}

		a, .btn {
			color: red; border: 1px solid red; padding: 3px; border-radius: 5px; background-color: #DFDFDF;
		}

		h1, h2, h3 {
			color: white;
		}

		</style>

</head>
<body>
	<center>

		<?php

			try {
				
				$bdd = new PDO('mysql:host=127.0.0.1:3308;dbname=blog;charset=utf8', 'root', '123');
				
				}

			catch(Exception $e) {

		    	die('Erreur : '.$e->getMessage());

				}

			$req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');

			$req->execute(array($_GET['billet']));

			$donnees = $req->fetch();

			if (empty($donnees)) {
				
				echo "<h1>CE BILLET N'EXISTE PAS</h1>";

			}

			else {

			echo "<h1>Vous êtes sur l'article : <span style='text-decoration : underline;'>" . $donnees['titre'] . "</span></h1>";

			echo "<strong>" . $donnees['date_creation_fr'] . "</strong><br><br><br>" . $donnees['contenu'];

			}
			$req->closeCursor();
		?>
	
	<br>
		<br>
			<hr>
		<br>
		<a href="index.php">RETOUR</a>
	<br>	
	<br>
		<h3>COMMENTAIRES :</h3>
	<br>
	<br>

		<?php


			$req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire DESC');

			$req->execute(array($_GET['billet']));

			if (empty($donnees)) {
				echo "Aucun commentaire, rédigez en un ! :D";
			}

			else {
				
			while ($donnees = $req->fetch())

			{

				echo '<strong>' . $donnees['auteur'] . ' </strong>' . $donnees['date_commentaire_fr'] . '<strong> : </strong>' . $donnees['commentaire'] . '<br><br>';}
			}

			$req->closeCursor();


			?>

		<br>
		<br>
		<br>

			<h3>AJOUTER UN COMMENTAIRE :</h3>

		<br>
		<br>

		<?php 

		$req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');

		$req->execute(array($_GET['billet']));

		$donnees = $req->fetch(); ?>

	<form method='post' action='commentaires_post.php?billet=<?php echo $donnees['id'] ?>'> 

		Votre Prénom : <br>

		<input type="text" name="auteur" required>

		<br>
		<br>

		Commentaire : <br>
		<textarea name='commentaire' style='width: 50vw; height: 32px;'' required></textarea>
		
		<br>
		<br>
		
		<input class='btn' type='submit' name='ok' value="SEND">

		<br>
		<br>

	</form>


		
	</center>
</body>
</html>