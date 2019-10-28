<?php include 'includes/header.php';  ?>	
<title>Blog : Accueil</title>
</head>
<body>


	<h1>Bienvenue sur mon Blog. </h1>
		<!-- <h2>Bienvenue sur mon Blog !</h2> -->
			<h3>Dernières actualitées :</h3>

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

			echo '<h3>' . $donnees['titre'].'</h3>';
			echo '<div class ="days">'. $donnees['date_creation']. '</div>';
			echo '<div class ="content">'. $donnees['contenu']. '</div>';


			echo '<button class="comment"><a href="commentaires.php?billet=' . $donnees['id'] . '"> voir les commentaires </a></button>';


			// echo '<a href="commentaires.php?billet=' . $donnees['id'] . '"> voir les commentaires </a>';










			// echo  '<h2>' . $donnees['titre'] . '</h2>' . $donnees['date_creation'] . $donnees['contenu'] . '<a href="commentaires.php?billet=' . $donnees['id'] . '"> voir les commentaires </a>';

		}


		$reponse->closeCursor();

		echo '<a href="admin/index.php?"><button class="btn_blog">ESPACE ADMIN</button></a>';
		?>

	</div>

	<?php include 'includes/footer.php'; ?>