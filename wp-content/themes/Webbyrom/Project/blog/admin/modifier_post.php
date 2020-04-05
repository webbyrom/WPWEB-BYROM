<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MODIFIER</title>
			<style type="text/css">

		body {
			color: #DFDFDF;
			background-color: #151515;
		}

		h1, h2, h3 {
			color: white;
		}
		
		.row {
			text-align: center;
		}

		.btng {
			color: green; border: 1px solid green; padding: 3px; border-radius: 5px; background-color: #DFDFDF;
		}

		.btnr {
			color: red; border: 1px solid red; padding: 3px 6px 3px 6px; border-radius: 5px; background-color: #DFDFDF;
		}

	</style>
</head>
<body>
	<center>


<?php 


	
	try {

		$bdd = new PDO('mysql:host=localhost:3308;dbname=blog;charset=utf8', 'root', '123');
		
	$idid = $_GET['billet'];
	$titre = $_POST['titre_new'];
	$contenu = $_POST['contenu_new'];


	/*echo "<br><h2>Voulez-vous vraiment modifier le billet ? </h2><br><br><form method='post'><input class='btnr' type='submit' name='okok' value='OUI'> | <input class='btng' type='button' value='RETOUR' onclick='window.location.href=\"/blog/admin/\"'> </form>"; */





			if (/*isset($_POST['okok']) &&*/ !empty($idid) && !empty($titre) && !empty($contenu)) {


			$req = $bdd->prepare('

				UPDATE billets

				SET titre = :titre, contenu = :contenu

				WHERE id = :idid

				');

			$req->execute(array(

			    'titre' => $titre,

			    'contenu' => $contenu,

			    'idid' => $idid

			    ));


			header('Location: index.php');

			}

		}

	catch(Exception $e) {

	    die('Erreur : '.$e->getMessage());
	}

	



?>
	


	</center>
</body>
</html>