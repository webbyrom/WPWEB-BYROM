<?php include '/../includes/header.php';  ?>
	<title>MODIFICATION DE BILLET</title>

</head>
<body>
	
		<?php

			try {
				
				$bdd = new PDO('mysql:host=localhost;dbname=fourelro_blog;charset=utf8', 'fourelro', 'GeX692001');
				
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
	
	<form method="post" action="modifier_post.php?billet=<?php echo $donnees['id']?>"> 

		<p>Modification du Titre :</p>

		<input type="text" name="titre_new" value="<?php echo $donnees['titre'] ?>" required>

	
	

		<p>Modification du Contenu du Billet :</p>
		<textarea name='contenu_new' required><?php echo $donnees['contenu'] ?></textarea>
		
	
	

		<p>!!! Vérifiez bien vos modifications ! Confirmez-vous les changements ? !!!</p>
		
		<input type='submit' value="MODIFIER">
		<a href="index.php">RETOUR</a>
	</form>

	
	




<?php include '/../includes/footer.php'; ?>