<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog ADMIN</title>

	<style type="text/css">

		body {
			color: #DFDFDF;
			background-color: #151515;
		}

		h2 {
			font-size: 30px;
		}

		h1 {
			font-size: 50px;
			border: 5px solid white;
			padding: 10px 0 10px 0;
			background-color: #303030;
			border-radius: 5px;
		}

		.btng {
			color: green; border: 1px solid green; padding: 3px; border-radius: 5px; background-color: #DFDFDF;
		}

		.btnr {
			color: red; border: 1px solid red; padding: 3px; border-radius: 5px; background-color: #DFDFDF;
		}

		h1, h2, h3 {
			color: white;
		}
		
		.row {
			text-align: center;
		}

	</style>

</head>
<body>
	<center>
	
		<br>
		<h1>ADMIN</h1>
		<br>
		<br>
		<h2>Vous êtes sur l'interface ADMIN !</h2>
	
	<div>

		<hr>

		<?php 

			try {
				
				$bdd = new PDO('mysql:host=localhost:3308;dbname=blog;charset=utf8', 'root', '123');
				
				}

			catch(Exception $e) {

		    	die('Erreur : '.$e->getMessage());

				}

			$reponse = $bdd->query('SELECT id, date_creation, titre, contenu FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

			while ($donnees = $reponse->fetch()) {

			    echo '<br><br><h2>| ' . $donnees['titre'] . ' |</h2>' . $donnees['date_creation'] . '<br><br><br>' . $donnees['contenu'] . '<br><br><br><a href="modifier.php?billet=' . $donnees['id'] . '"><button class="btng">MODIFIER</button></a> | <a href="supprimer.php?billet=' . $donnees['id'] . '"><button class="btnr">SUPPRIMER</button></a><br><br><hr>';

				}

				echo "<br><br><a href='ajouter.php'><button class='btng'>AJOUTER UN BILLET</button></a><br><br><a href='../index.php'><button class='btng'>RETOUR VERS L'ESPACE PUBLIC</button></a>";


			$reponse->closeCursor();

		?>
		
	</div>
	</center>


</body>
</html>