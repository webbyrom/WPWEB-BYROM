<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog</title>

	<style type="text/css">

		body {
			color: #DFDFDF;
			background-color: #151515;
		}

		a {
			color: red; border: 1px solid red; padding: 3px; border-radius: 5px; background-color: #DFDFDF;
		}

		h1, h2, h3 {
			color: white;
		}

		h1 {
			font-size: 50px;
			border: 5px solid white;
			padding: 10px 0 10px 0;
			background-color: #303030;
			border-radius: 5px;
		}
		
		.row {
			text-align: center;
		}

		h2 {
			font-size: 30px;
		}

	</style>

</head>
<body>
	<center>
	
		<br>
		<h1>WELCOME TO MY BLOG !</h1>
		<br>
		<br>
		<h2>Dernières actualités :</h2>
	
	<div>

		<hr>

		<?php 

			try {
				
				$bdd = new PDO('mysql:host=127.0.0.1:3308;dbname=blog;charset=utf8', 'root', '123');
				
				}

			catch(Exception $e) {

		    	die('Erreur : '.$e->getMessage());

				}

			$reponse = $bdd->query('SELECT id, date_creation, titre, contenu FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

			while ($donnees = $reponse->fetch()) {

			    echo '<br><br><h2>| ' . $donnees['titre'] . ' |</h2>' . $donnees['date_creation'] . '<br><br><br>' . $donnees['contenu'] . '<br><br><br><a href="commentaires.php?billet=' . $donnees['id'] . '">! voir les commentaires !</a><br><br><hr>';

				}


			$reponse->closeCursor();

				echo "<br><br><a style='color: green; border: 1px solid green;' href='admin/index.php'>ESPACE ADMIN</a>";
		?>
		
	</div>
	</center>


</body>
</html>