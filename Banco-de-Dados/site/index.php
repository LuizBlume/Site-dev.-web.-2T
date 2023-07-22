<?php
session_start();
// print_r($_SESSION);
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
		integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon">
	<style>
		section {
			font-family: 'spectral', sans-serif;
		}

		* {
			letter-spacing: 1px;
		}

		header {
			box-shadow: 0 5px 0 #171717;
		}

		footer {
			width: 100%;
			color: #ffffff;
		}

		#footer-link {
			text-decoration: none;
		}

		#footer_content {
			background-color: #202020;
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			padding: 3rem 3.5rem;
		}

		#footer_contacts h1 {
			margin-bottom: 0.75rem;
		}

		#footer_social_media {
			display: flex;
			gap: 2rem;
			margin-top: 1.5rem;
		}

		#footer_social_media .footer-link {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 2.5rem;
			width: 2.5rem;
			color: var(--color-neutral-30);
			border-radius: 50%;
			transition: all 0.4s;
		}

		#footer_social_media .footer-link:hover {
			opacity: 0.8;
		}

		#instagram {
			background: linear-gradient(#7f37c9, #ff2992, #ff9807);
		}

		#facebook {
			background-color: #4267b3;
		}

		#whatsapp {
			background-color: #25d366;
		}

		.footer-list {
			display: flex;
			flex-direction: column;
			gap: 0.75rem;
			list-style: none;
		}

		.footer-list .footer-link {
			color: var(--color-neutral-30);
			transition: all 0.4s;
		}

		.footer-list .footer-link:hover {
			color: var(---color-neutral-30);
		}

		#footer_subscribe {
			display: flex;
			flex-direction: column;
			gap: 1.5rem;
		}

		#footer_subscribe p {
			color: var(---color-neutral-20);
		}

		#input_group {
			display: flex;
			align-items: center;
			background-color: var(---color-neutral-0);
			border-radius: 4px;
		}

		#input_group input {
			all: unset;
			padding: 0.75rem;
			width: 100%;
		}

		#input_group button {
			background-color: var(---color-neutral-20);
			border: none;
			color: var(---color-neutral-20);
			padding: 0px 1.25rem;
			font-size: 1.125rem;
			height: 100%;
			border-radius: 0px 4px 4px 0px;
			cursor: pointer;
			transition: all 0.4s;
		}

		#input_group button:hover {
			opacity: 0.8;
		}

		#footer_copyright {
			display: flex;
			justify-content: center;
			background-color: var(---color-neutral-0);
			font-size: 0.9rem;
			padding: 1.5rem;
			font-weight: 100;
		}

		@media screen and (max-width: 768px) {
			#footer_content {
				grid-template-columns: repeat(2, 1fr);
				gap: 2rem;
			}
		}

		@media screen and (max-width: 426px) {
			#footer_content {
				grid-template-columns: repeat(1, 1fr);
				padding: 3rem 2rem;
			}
		}

		#logofooter {
			border-radius: 180px;
		}
	</style>
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
				<img class="imgsection" src="imagens/rts.webp" alt="">
				<p>Estratégia em Tempo Real: O que são os eSports de estratégia em tempo real?</p>
			</a>

			<br>

			<a href="FPS.php">
				<img class="imgsection" src="imagens/FPS.jpg" alt="">
				<p>FPS: A modalidade mais conhecida de eSports, venha conhecer também!</p>
			</a>

			<br>

			<a href="Luta.php">
				<img class="imgsection" src="imagens/LUTA.webp" alt="">
				<p>Luta: Conheça a modalidade eSports mais agressiva!</p>
			</a>

			<br>

			<a href="esportes.php">
				<img class="imgsection" src="imagens/esportes.avif" alt="">
				<p>Esportes: Esportes comuns mas dentro de telas!</p>
			</a>

			<br>

			<a href="cartas.php]">
				<img class="imgsection" src="imagens/cartas.jpg" alt="">
				<p>Cartas: Um esporte que exige muita atenção!</p>
			</a>

			<br>

			<a href="moba.php">
				<img class="imgsection" src="imagens/MOBA.jpg" alt="">
				<p>MOBA: Um jogo de estratégia em equipe!</p>
			</a>
		</section>
	</main>
	<aside>
		<nav>
			<a href="https://hype.games/br/colecoes/jogos-playstation-pc-no-hype?gclid=CjwKCAjw-7OlBhB8EiwAnoOEkyjWY0OUoL3SAt0d6O7VmD8J_p4LtdZcPsvCp0bVCQ9jz1m9_Y2oZxoCYAIQAvD_BwE"
				target="_blank">
				<img src="imagens/anuncio-index.jpg" alt="" id="anuncio">
			</a>
		</nav>
	</aside>

	<footer>
		<div id="footer_content">
			<div id="footer_contacts">
				<a href="index.php">
					<img src="imagens/logo.png" alt="" id="logofooter">
				</a>
				<p>Minhas redes sociais!</p>
				<div id="footer_social_media">
					<a href="https://www.instagram.com/blume.047/" class="footer-link" id="instagram">
						<i class="fa-brands fa-instagram"></i>
					</a>
					<a href="https://www.facebook.com/profile.php?id=100025262752685" class="footer-link" id="facebook">
						<i class="fa-brands fa-facebook-f"></i>
					</a>
					<a href="https://web.whatsapp.com/" class="footer-link" id="whatsapp">
						<i class="fa-brands fa-whatsapp"></i>
					</a>
				</div>
			</div>
			<ul class="footer-list">
				<li>
					<h3>
						Blog
					</h3>
				</li>
				<li>
					<a href="#" class="footer-link">Tech</a>
				</li>
				<li>
					<a href="#" class="footer-link">Adventures</a>
				</li>
				<li>
					<a href="#" class="footer-link">Music</a>
				</li>
			</ul>
			<ul class="footer-list">
				<li>
					<h3>
						Products
					</h3>
				</li>
				<li>
					<a href="#" class="footer-link">app</a>
				</li>
				<li>
					<a href="#" class="footer-link">Desktop</a>
				</li>
				<li>
					<a href="#" class="footer-link">Cloud</a>
				</li>
			</ul>
			<div id="footer_subscribe">
				<h3>Subscribe</h3>
				<p>
					Entre com seu email para notificarmos novas notícias.
				</p>

				<div id="input_group">
					<input type="email" id="email">
					<button>
						<i class="fa-regular fa-envelope"></i>
					</button>
				</div>
			</div>
		</div>

		<div id="footer_copyright">
			&#169
			2023 all rights reseverds.
		</div>
	</footer>
	<script type="text/javascript" src="javascript.js"></script>
</body>