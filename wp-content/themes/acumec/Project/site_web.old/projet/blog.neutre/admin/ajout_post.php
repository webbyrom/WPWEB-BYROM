<?php 

	$titre = $_POST['titre'];
	$contenu = $_POST['contenu'];

	try {

		$bdd = new PDO('mysql:host=localhost:3308;dbname=blog;charset=utf8', 'root', '123');
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
