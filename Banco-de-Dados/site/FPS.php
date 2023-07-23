<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
		integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>FPS</title>
    <style>
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
            width: 180px;
        }

        main {
            height: 100%;
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
            <a href="Luta.php" id="linkmenu">Luta</a>
            <a href="esportes.php" id="linkmenu">Esportes</a>
            <a href="cartas.php" id="linkmenu">Cartas</a>
            <a href="MOBA.php" id="linkmenu">MOBA</a>
        </nav>
    </header>
    <main>
        <div class="textomain">
            <h1>Jogos FPS</h1>
            <p>Os jogos FPS (First-Person Shooter) têm uma longa história e têm sido uma parte importante da indústria
                de jogos
                desde o final da década de 1990. Aqui está uma visão geral da história, competitividade e alguns dados
                sobre
                jogos FPS.</p>
            <br>
            <h2>História:</h2>
            <p>Os jogos FPS remontam ao início da década de 1970, com títulos como "Maze War" e "Spasim". No entanto,
                foi o
                lançamento de "Wolfenstein 3D", desenvolvido pela id Software em 1992, que popularizou o gênero.
                O jogo colocou os jogadores em uma perspectiva de primeira pessoa, permitindo-lhes explorar e lutar em
                ambientes
                tridimensionais.
                Em seguida, veio "Doom" em 1993, que se tornou um enorme sucesso e estabeleceu muitos dos elementos
                básicos dos jogos FPS modernos.</p>
            <br>
            <p>A era de ouro dos jogos FPS ocorreu na década de 1990 e início dos anos 2000, com o lançamento de títulos
                icônicos como "Quake", "Half-Life" e "Counter-Strike". Esses jogos introduziram multiplayer online,
                narrativas
                complexas e mecânicas de jogo inovadoras, o que ajudou a definir o gênero.</p>
            <br>
            <h2>Competitividade:</h2>
            <p>Os jogos FPS têm uma forte cultura competitiva. Desde os primeiros dias dos jogos multiplayer, os
                jogadores
                competiam em LAN parties e em servidores online para provar suas habilidades. A popularização da
                internet de
                banda larga permitiu o surgimento de ligas e torneios oficiais, nos quais os melhores jogadores e
                equipes
                competem em nível profissional.</p>
            <br>
            <p>Uma das franquias mais conhecidas e competitivas dos jogos FPS é "Counter-Strike". Lançado inicialmente
                como um
                mod de "Half-Life" em 1999, o "Counter-Strike" tornou-se um dos jogos mais populares e competitivos do
                mundo.
                Ele tem uma cena de eSports ativa, com torneios regulares e equipes profissionais disputando premiações
                significativas.</p>
            <br>
            <p>Além de "Counter-Strike", outros jogos FPS também têm uma forte presença competitiva. "Call of Duty" é
                uma série
                famosa que lançou vários títulos multiplayer e tem uma cena competitiva estabelecida. "Overwatch",
                desenvolvido
                pela Blizzard Entertainment, é outro exemplo popular de um jogo FPS competitivo com equipes
                profissionais e
                ligas organizadas.</p>
            <br>
            <a href="https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/" target="_blank"
                rel="noopener noreferrer"><img src="imagens/anuncio-CS.jpg" alt="" id="anunciocs"></a>
            <br>
            <h2>Dados de jogos FPS:</h2>
            <p>Os jogos FPS têm uma base de fãs enorme e são extremamente populares em todo o mundo. Aqui estão alguns
                dados
                interessantes sobre jogos FPS:</p>
            <br>
            <h3>Counter-Strike: Global Offensive (CS:GO)</h3>
            <p>Lançado em 2012, é um dos jogos FPS mais jogados atualmente. Ele tem
                uma média de mais de 700.000 jogadores simultâneos diariamente.</p>
            <br>
            <h3>Call of Duty: Warzone</h3>
            <p>Um jogo gratuito lançado em 2020, alcançou mais de 100 milhões de jogadores em apenas 5
                meses após o lançamento.</p>
            <br>
            <h3>Valorant</h3>
            <p>Desenvolvido pela Riot Games e lançado em 2020, teve mais de 3 milhões de jogadores
                simultâneos durante seu período de acesso antecipado.</p>
            <br>
            <p>O maior torneio de eSports de "Counter-Strike: Global Offensive", o "CS:GO Major Championship", tem uma
                premiação total de mais de US$ 2 milhões.
                <br>
                O gênero FPS é conhecido por sua comunidade ativa de modding, onde os jogadores criam e compartilham
                conteúdo
                personalizado, como mapas, armas e mods de jogabilidade.
                <br>
                Essas são apenas algumas informações gerais sobre a história, competitividade e dados dos jogos FPS. O
                gênero
                continua a evoluir e atrair jogadores de todo o mundo, proporcionando uma experiência de jogo
                emocionante e
                competitiva.
            </p>
        </div>
    </main>
    <aside>
        <nav>
            <a href="https://m.magazineluiza.com.br/cpu-gamer-barato-i5-8gb-ssd-240gb-kit-gamer-completo-alletech/p/gdhd5bah48/in/cptg/"
                target="_blank">
                <img src="imagens/anuncio-FPS.webp" alt="" id="anuncio">
            </a>
        </nav>
    </aside>
    <footer>
    <div id="footer_content">
			<div id="footer_contacts">
				<img src="imagens/foto-logo-footer.jpg" alt="" id="logofooter">
				<p>Minhas redes sociais</p>
				<div id="footer_social_media">
					<a href="https://www.instagram.com/blume.047/" class="footer-link" id="instagram">
						<i class="fa-brands fa-instagram"></i>
					</a>
					<a href="https://www.facebook.com/profile.php?id=100025262752685" class="footer-link" id="facebook">
						<i class="fa-brands fa-facebook-f"></i>
					</a>
					<a href="https://wa.me/qr/B74IRQ5IJLXVJ1" class="footer-link" id="whatsapp" target="_blank">
						<i class="fa-brands fa-whatsapp"></i>
					</a>
				</div>
			</div>
			<ul class="footer-list">
				<li>
					<h3>
						Para mais notícias, acesse:
					</h3>
				</li>
				<li>
					<a href="https://portaldogamer.com.br/" class="footer-link" target="_blank">Portal do Gamer</a>
				</li>
				<li>
					<a href="https://www.tecmundo.com.br/voxel/noticias" class="footer-link" target="_blank">Tecmundo</a>
				</li>
				<li>
					<a href="https://www.theenemy.com.br/news" class="footer-link" target="_blank">The Enemy</a>
				</li>
			</ul>
			<ul class="footer-list">
				<li>
					<h3>
						Produtos
					</h3>
				</li>
				<li>
					<a href="jogo/jogo.php" class="footer-link">Jogue um jogo feito por mim</a>
				</li>
				<li>
					<a href="https://github.com/LuizBlume" class="footer-link" target="_blank">Github</a>
				</li>
				<li>
					<a href="https://www.linkedin.com/in/luiz-fernando-532447280/" class="footer-link" target="_blank">Linkedin</a>
				</li>
			</ul>
			<div id="footer_subscribe">
				<h3>Inscreva-se</h3>
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