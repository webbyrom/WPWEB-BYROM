<?php include 'includes/header.php';  ?>	
	<title>Blog : Accueil</title>
</head>
<body>


	<h1>MON BLOG</h1>
	<h2>Bienvenue sur mon Blog !</h2>
	<h3>Dernières actualités :</h3>

	<div>

		<?php 

		try {

			$bdd = new PDO('mysql:host=localhost:3308;dbname=blog;charset=utf8', 'root', '123');

		}

		catch(Exception $e) {

			die('Erreur : '.$e->getMessage());

		}

		$reponse = $bdd->query('SELECT id, date_creation, titre, contenu FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

		while ($donnees = $reponse->fetch()) {

			echo '
			<h2>' . $donnees['titre'] . '</h2>' . $donnees['date_creation'] . $donnees['contenu'] . '<a href="commentaires.php?billet=' . $donnees['id'] . '">! voir les commentaires !</a>';

		}


		$reponse->closeCursor();

		echo "<a href='admin/index.php'>ESPACE ADMIN";
		?>

	</div>

<?php include 'includes/footer.php'; ?>