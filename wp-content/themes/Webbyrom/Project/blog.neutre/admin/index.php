<?php include '../includes/header.php';  ?>
	<title>Espace Administration</title>
</head>
<body>



	<h1>ADMIN</h1>

	<h2>Vous êtes sur l'interface ADMIN !</h2>

	<div>


		<?php 

		try {

			$bdd = new PDO('mysql:host=localhost:3308;dbname=blog;charset=utf8','root','123');

		}

		catch(Exception $e) {

			die('Erreur : '.$e->getMessage());

		}

		$reponse = $bdd->query('SELECT id, date_creation, titre, contenu FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

		while ($donnees = $reponse->fetch()) {

			echo '<h2>' . $donnees['titre'] . '</h2>' . $donnees['date_creation'] . $donnees['contenu'] . '<a href="modifier.php?billet=' . $donnees['id'] . '"><button class="btng">MODIFIER</button></a><a href="supprimer.php?billet=' . $donnees['id'] . '"><button class="btnr">SUPPRIMER</button></a>';

		}

		echo "<a href='ajouter.php'><button class='btng'>AJOUTER UN BILLET</button></a><a href='../index.php'><button class='btng'>RETOUR VERS L'ESPACE PUBLIC</button></a>";


		$reponse->closeCursor();

		?>

	</div>



<?php include '../includes/footer.php'; ?>