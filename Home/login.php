<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>LOGIN - Intranet</title>
		<link href="bootstrap-5.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/login.css"/>
		<header>
			<img src="images/logo.png">
		</header>
	</head>
	<body>
		<?php
			if(isset($_SESSION["CODutente"])){
				header("location: home.php");
			}
			if(isset($_POST["cancella"])){
				$_POST["utente"] = "";
				$_POST["password"] = "";
			}
			if(isset($_POST["utente"])&&isset($_POST["password"])&&isset($_POST["invia"])){
				$filename = 'utenti.txt';
				$handler = fopen($filename, 'r');
				if ($handler === false) {
					printf('Impossibile aprire il file %s', $filename);
					exit;
				}
				$autenticazione = false;
				$utente = array();
				while(!feof($handler)&&!$autenticazione) {
					$content = fgets($handler); // inserimento di una riga del file nella variabile content
					$arr = array(chr(10),chr(13)); // rimozione dei caratteri speciali
					$utente = explode(' ', str_replace($arr,'',$content));
					if($content != null){
						if(strcmp($utente[0], $_POST["utente"])===0 && strcmp($utente[1], $_POST["password"])===0){
							session_start();
							$_SESSION["utente"] = $utente[0];
							$_SESSION["password"] = $utente[1];
							$_SESSION["CODutente"] = $utente[2];
							$autenticazione = true;
							header("location: index.php"); // reidirizzamento alla pagina home
						}
					}
				}
				fclose($handler);
			}
			echo 
			'<div class="formlogin">
			<form method="POST" action="'.$_SERVER["PHP_SELF"].'">		
				<br/><h2 style="text-align:center">Autenticazione</h2>
				<div class="input form-floating">
					<input type="text" class="inputbar form-control"  name="utente" id="utente" class="box"';
					if(isset($_POST["utente"])){
						$_POST["utente"] = str_replace(' ', '', $_POST["utente"]);
						echo 'value="'.$_POST["utente"].'"';
					}
					echo ' placeholder="name@example.com" required>
					<label for="utente">Inserisci email</label>
				</div>
				<div class="input form-floating">
					<input type="password" class="inputbar form-control" name="password" id="password" class="box" placeholder="name@example.com" required>
					<label for="password">Inserisci password</label>
				</div><br>
				<div class="blocco1">
					<button type="submit" class="accedi btn btn-primary btn-lg" class="bottoni" name="invia">Accedi</button>
					<button type="submit" class="cancella btn btn-primary btn-lg" class="bottoni" name="cancella">Cancella</button>
				</div>
			</form>
			</div>';
			if(isset($autenticazione))
				if(!$autenticazione)
					echo '<h3 style="color:red;text-align:center">Utente o password non corretti</h3>';
		?>
	</body>
</html>