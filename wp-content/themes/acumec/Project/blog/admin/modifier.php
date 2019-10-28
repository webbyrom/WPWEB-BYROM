<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MODIFICATION DE BILLET</title>
		<style type="text/css">

		body {
			color: #DFDFDF;
			background-color: #151515;
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

		a {
			text-decoration: none;
			font-size: 16px;

		}

	</style>
</head>
<body>
	
	<center>

				<?php

			try {
				
				$bdd = new PDO('mysql:host=localhost:3308;dbname=blog;charset=utf8', 'root', '123');
				
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
				echo "<h1>MODIFICATION DU BILLET : " . $donnees['titre'] . "</h1>";
			}

			?>
	
	<br>
		<br>
			<hr>
		<br> 
	<br>
	
	<form method="post" action="modifier_post.php?billet=<?php echo $donnees['id']?>"> 

		Modification du Titre : <br>

		<input style="width: 30vw" type="text" name="titre_new" value="<?php echo $donnees['titre'] ?>" required>

		<br>
		<br>

		Modification du Contenu du Billet : <br>
		<textarea name='contenu_new' style='width: 50vw; height: 300px;' required><?php echo $donnees['contenu'] ?></textarea>
		
		<br>
		<br>

		<p style="color: red;">!!! Vérifiez bien vos modifications ! Confirmez-vous les changements ? !!!</p>
		
		<input class='btnr' type='submit' value="MODIFIER">
		<a class="btng" href="index.php">RETOUR</a>
	</form>

		<br>
		<br>


	</center>

</body>
</html>