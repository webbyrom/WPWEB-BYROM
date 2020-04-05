<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AJOUT DE BILLET</title>
		<style type="text/css">

		body {
			color: #DFDFDF;
			background-color: #151515;
		}

		.btn {
			color: green; border: 1px solid green; padding: 3px; border-radius: 5px; background-color: #DFDFDF;
		}

		a {
			color: red; border: 1px solid red; padding: 3px; border-radius: 5px; background-color: #DFDFDF;
		}

		h1, h2, h3 {
			color: white;
		}
		
		.row {
			text-align: center;
		}

	</style>
</head>
<body>
	
	<center>
	
	<h1>AJOUT DE BILLET</h1>
	
	<br>
		<br>
			<hr>
		<br> 
	<br>
	
	<form method='post' action='ajout_post.php'> 

		Titre : <br>

		<input style="width: 30vw" type="text" name="titre" required>

		<br>
		<br>

		Contenu du Billet : <br>
		<textarea name='contenu' style='width: 50vw; height: 300px;'' required></textarea>
		
		<br>
		<br>
		
		<input class='btn' type='submit' name='ok' value="PUBLIER">
		<a href="index.php">RETOUR</a>

		<br>
		<br>

	</form>

	</center>

</body>
</html>