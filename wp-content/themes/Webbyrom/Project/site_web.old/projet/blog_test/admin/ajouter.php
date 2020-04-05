<?php include '/../includes/header.php';  ?>
	<title>Espace Administration : Ajouter un billet</title>

</head>
<body>



	<h1>AJOUT DE BILLET</h1>

	<form method='post' action='ajout_post.php'> 

		<p>Titre :</p> 

		<input type="text" name="titre" required>

		<p>Contenu du Billet :</p>
		<textarea name='contenu' required></textarea>

		<input type='submit' name='ok' value="PUBLIER">
		<a href="index.php">RETOUR</a>

	</form>


<?php include '/../includes/footer.php'; ?>