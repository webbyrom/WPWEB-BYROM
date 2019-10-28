<?php include '../includes/header.php';  ?>
	<title>Espace Administration : Supression du billet</title>

</head>
<body>



	<?php 



	try {

		$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');

		$idid = $_GET['billet'];

		echo "

		<h2>Voulez-vous vraiment supprimer le billet ? </h2>
		
		<form method='post'>
		
			<input type='submit' name='okok' value='OUI'>
			<input type='button' value='RETOUR' onclick='window.location.href=\"/blog/admin/\"'> 
		
		</form>"; ?>



		<?php


		if (isset($_POST['okok']) && !empty($idid)) {


			$req = $bdd->prepare('

				DELETE FROM billets

				WHERE id = :idid

				');

			$req->execute(array(

				'idid' => $idid,

			));


			header('Location: index.php');

		}

	}

	catch(Exception $e) {

		die('Erreur : '.$e->getMessage());
	}





	?>



<?php include '../includes/footer.php'; ?>