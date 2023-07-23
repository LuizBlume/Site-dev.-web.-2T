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
    <title>MOBA</title>
    <style>
        .anuncio-meio {
            width: 870px;
            height: 120px;
        }

        main {
            height: 2320px;
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
            width: 180px;
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
        </nav>
    </header>
    <main>
        <div>
            <h1>Jogos MOBA</h1>
            <p>Os jogos MOBA (Multiplayer Online Battle Arena) têm conquistado uma enorme popularidade na indústria de
                jogos nos últimos anos. Eles envolvem equipes de jogadores competindo em batalhas estratégicas,
                combinando
                elementos de jogos de estratégia em tempo real e RPG. Aqui está uma visão geral da história,
                competitividade
                e alguns dados sobre jogos MOBA.</p>
            <br>
            <h2>História:</h2>
            <p>O gênero MOBA teve suas origens em mods de jogos anteriores. O primeiro MOBA amplamente reconhecido foi
                "Defense of the Ancients" (DotA), um mod para o jogo "Warcraft III" da Blizzard Entertainment lançado em
                2003. O sucesso do DotA inspirou o desenvolvimento de jogos MOBA independentes.</p>
            <p>Em 2009, a Riot Games lançou "League of Legends" (LoL), que se tornou um dos jogos MOBA mais populares de
                todos os tempos. O jogo apresentou uma experiência acessível e atraente, impulsionando o crescimento do
                gênero MOBA como um todo.</p>
            <br>
            <h2>Competitividade:</h2>
            <p>Os jogos MOBA têm uma cena competitiva muito ativa e são um dos principais pilares dos eSports. Equipes
                profissionais e jogadores individuais competem em ligas e torneios em todo o mundo, batalhando pela
                supremacia e por prêmios em dinheiro significativos.</p>
            <br>
            <p>O jogo "League of Legends" é um exemplo proeminente de um MOBA com uma cena competitiva estabelecida. A
                Riot
                Games organiza o "League of Legends World Championship", um torneio anual que atrai milhões de
                espectadores
                e distribui milhões de dólares em premiações. Além disso, existem várias ligas regionais e torneios
                independentes que mantêm a comunidade competitiva ativa.
                <br>
                <a href="https://www.leagueoflegends.com/pt-br/" target="_blank" rel="noopener noreferrer">
                    <img class="anuncio-meio" src="imagens/anuncio-meio-MOBA.jpg" alt="">
                </a>
                <br>
                Outro MOBA popular é "Dota 2", desenvolvido pela Valve Corporation. O jogo tem sua própria competição
                de
                eSports, o "The International", que é conhecido por ter premiações astronômicas. Os jogadores
                profissionais
                de Dota 2 competem por prêmios em dinheiro que chegam a milhões de dólares.
            </p>

            <h2>Dados de jogos MOBA:</h2>
            <p>Os jogos MOBA atraem uma base de fãs enorme e têm uma presença significativa nos eSports. Aqui estão
                alguns
                dados interessantes sobre jogos MOBA:</p>
            <br>
            <h3>League of Legends</h3>
            <p>É um dos jogos mais jogados e assistidos atualmente. Durante o pico de sua popularidade,
                o jogo alcançou mais de 100 milhões de jogadores mensais.</p>
            <br>
            <h3>Dota 2</h3>
            <p>O "The International 2019" estabeleceu o recorde de maior prêmio em dinheiro na história dos
                eSports, distribuindo mais de US$ 34 milhões.</p>
            <br>
            <h3>Heroes of the Storm</h3>
            <p>Outro jogo MOBA, da Blizzard Entertainment e "Smite" da Hi-Rez Studios, também
                têm comunidades competitivas ativas e realizam torneios regulares.</p>
            <br>
            <p>Os jogos MOBA são conhecidos por sua complexidade estratégica, ampla variedade de personagens jogáveis e
                a
                necessidade de uma forte coordenação em equipe.

                Além dos jogos MOBA clássicos, existem também variações do gênero, como "Arena of Valor", "Mobile
                Legends" e
                "Vainglory", que foram projetados especificamente para jogabilidade em dispositivos móveis.

                Esses são apenas alguns dados gerais sobre a história, competitividade e informações sobre jogos MOBA. O
                gênero continua a evoluir, atraindo jogadores de todo o mundo e fornecendo experiências competitivas
                emocionantes e estratégicas.</p>
            <br>
            <br>
            <h1>
                Jogue um jogo feito por mim!
                <a href="jogo/jogo.php">
                    <br>
                    Clique aqui
                </a>
            </h1>
        </div>
    </main>
    <aside>
        <nav>
            <a href="https://overwatch.blizzard.com/pt-br/" target="_blank">
                <img src="imagens/anuncio-MOBA.jpg" alt="" id="anuncio">
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