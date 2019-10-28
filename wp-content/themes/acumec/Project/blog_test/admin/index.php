<?php include '/../includes/header.php';  ?>
	<title>Espace Administration</title>
</head>
<body>



	<h1>Vous êtes sur l'interface ADMIN !</h1>

	<!-- <h2>Vous êtes sur l'interface ADMIN !</h2> -->

	<div>


		<?php 

		try {

			$bdd = new PDO('mysql:host=localhost;dbname=fourelro_blog;charset=utf8', 'fourelro', 'GeX692001');

		}

		catch(Exception $e) {

			die('Erreur : '.$e->getMessage());

		}

		$reponse = $bdd->query('SELECT id, date_creation, titre, contenu FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

		while ($donnees = $reponse->fetch()) {


			echo '<h3>' .$donnees['titre'] .'</h3>';
			echo '<div class="days_admin">' .$donnees['date_creation'] .'</div>';
			echo '<div class="content_admin">'.$donnees['contenu'] .'</div>';
			echo '<button class="btn_modify"><a href="modifier.php?billet=' .$donnees['id'].'">Modifier</a></button>';
			echo '<button class="btn_deleted"><a href="supprimer.php?billet='.$donnees['id'] .'">SUPPRIMER</a></button>';

			// echo '<h3>' . $donnees['titre'] . '</h3>' . $donnees['date_creation'] . $donnees['contenu'] . '<a href="modifier.php?billet=' . $donnees['id'] . '"><button class="btn_modify">MODIFIER</button></a><a href="supprimer.php?billet=' . $donnees['id'] . '"><button class="btn_deleted">SUPPRIMER</button></a>';

		}

		echo "<a href='ajouter.php'><button class='btn_add'>AJOUTER UN BILLET</button></a><a href='../index.php'><button class='btn_return'>RETOUR VERS L'ESPACE PUBLIC</button></a>";


		$reponse->closeCursor();

		?>

	</div>
	


<?php include '/../includes/footer.php'; ?>