<html lang="fr">
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="CSS/index.css">
		<meta charset="UTF-8">
		<title>Module Connexion</title>
	</head>
	<body>
		<?php include 'mainheader.php' ?>
		<main class="mainindex">
			<h2>Inscription</h2>
			<form method="post">
				<label>E-mail</label><br>
					<input required type="email" placeholder="exemple@email.com" maxlength="255"/><br><br>
				<label>Mot de passe</label><br>
					<input required type="password" maxlength="255"/><br><br>
				<input type="submit"/>
			</form>
		</main>
		<?php include 'mainfooter.php' ?>
	</body>
</html>