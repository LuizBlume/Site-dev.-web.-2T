<?php
session_start();
print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

$logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>Game Time</title>
</head>

<body>
	<header>
		<a href="index.php" id="logo"><img src="imagens/logo.png" alt="" id="Logo"></a>
		<button id="openMenu">&#9776;</button>
		<nav id="menu">
			<button id="closeMenu">X</button>
			<a href="RTS.php" id="linkmenu">RTS</a>
			<a href="FPS.php" id="linkmenu">FPS</a>
			<a href="Luta.php" id="linkmenu">Luta</a>
			<a href="esportes.php" id="linkmenu">Esportes</a>
			<a href="cartas.php" id="linkmenu">Cartas</a>
			<a href="MOBA.php" id="linkmenu">MOBA</a>
		</nav>
	</header>
	<main>
		<section>

			<h1>
				<p>Notícias</p>
			</h1>

			<br>
			<br>

			<a href="RTS.php">
				<img src="imagens/rts.webp" alt="">
				<p>Estratégia em Tempo Real: O que são os eSports de estratégia em tempo real?</p>
			</a>

			<br>

			<a href="FPS.php">
				<img src="imagens/FPS.jpg" alt="">
				<p>FPS: A modalidade mais conhecida de eSports, venha conhecer também!</p>
			</a>

			<br>

			<a href="Luta.php">
				<img src="imagens/LUTA.webp" alt="">
				<p>Luta: Conheça a modalidade eSports mais agressiva!</p>
			</a>

			<br>

			<a href="esportes.php">
				<img src="imagens/esportes.avif" alt="">
				<p>Esportes: Esportes comuns mas dentro de telas!</p>
			</a>

			<br>

			<a href="cartas.php]">
				<img src="imagens/cartas.jpg" alt="">
				<p>Cartas: Um esporte que exige muita atenção!</p>
			</a>

			<br>

			<a href="moba.php">
				<img src="imagens/MOBA.jpg" alt="">
				<p>MOBA: Um jogo de estratégia em equipe!</p>
			</a>
		</section>
	</main>
	<aside>
		<nav>
			<a href="https://hype.games/br/colecoes/jogos-playstation-pc-no-hype?gclid=CjwKCAjw-7OlBhB8EiwAnoOEkyjWY0OUoL3SAt0d6O7VmD8J_p4LtdZcPsvCp0bVCQ9jz1m9_Y2oZxoCYAIQAvD_BwE"
				target="_blank">
				<img src="imagens/anuncio-index-removebg-preview.png" alt="" id="anuncio">
			</a>
		</nav>
	</aside>

	<footer>
		<h3>Entre em contato conosco:</h3>
		<br>
		Email: luiz.fernando.25107@gmail.com
		<br>
		<br>
		<p>Instagram:<a href="https://www.instagram.com/blume.047/" target="_blank" id="linkfooter"> blume.047</a></p> 
		
	</footer>
	<script type="text/javascript" src="javascript.js"></script>
</body>