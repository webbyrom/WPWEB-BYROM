<?php include 'includes/header.php';  ?>
	<title>Blog : Commentaires</title>
</head>
<body>

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

		echo "<h1>Vous êtes sur l'article : <span>" . $donnees['titre'] . "</span></h1>";

		echo "<strong>" . $donnees['date_creation_fr'] . "</strong>" . $donnees['contenu'];

	}
	$req->closeCursor();
	?>

	<a href="index.php">RETOUR</a>

	<h3>COMMENTAIRES :</h3>

	<?php


	$req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire DESC');

	$req->execute(array($_GET['billet']));

	if (empty($donnees)) {
		echo "Aucun commentaire, rédigez en un ! :D";
	}

	else {

		while ($donnees = $req->fetch())

		{

			echo '<strong>' . $donnees['auteur'] . ' </strong>' . $donnees['date_commentaire_fr'] . '<strong> : </strong>' . $donnees['commentaire'];}
		}

		$req->closeCursor();


		?>





		<h3>AJOUTER UN COMMENTAIRE :</h3>




		<?php

		$req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');

		$req->execute(array($_GET['billet']));

		$donnees = $req->fetch(); ?>

		<form method='post' action='commentaires_post.php?billet=<?php echo $donnees['id'] ?>'>

			<p>Votre Prénom :</p>

			<input type="text" name="auteur" required>


			<p>Commentaire :</p>

			<textarea name='commentaire' required></textarea>
			<input type='submit' name='ok' value="SEND">

		</form>



<?php include 'includes/footer.php'; ?>