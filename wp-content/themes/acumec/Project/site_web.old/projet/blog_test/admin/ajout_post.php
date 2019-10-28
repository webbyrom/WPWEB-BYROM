<?php 

	$titre = $_POST['titre'];
	$contenu = $_POST['contenu'];

	try {

		$bdd = new PDO('mysql:host=localhost;dbname=fourelro_blog;charset=utf8', 'fourelro', 'GeX692001');
	}

	catch(Exception $e) {

	    die('Erreur : '.$e->getMessage());
	}


	$req = $bdd->prepare('INSERT INTO billets(titre, contenu, date_creation ) VALUES(:titre, :contenu, NOW() )');

	$req->execute(array(

	    'titre' => $titre,

	    'contenu' => $contenu,

	    ));


	header('Location: index.php');



?>		
