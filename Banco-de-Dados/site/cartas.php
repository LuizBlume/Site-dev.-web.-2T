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
    <title>Cartas</title>
    <style>
        .anuncio-meio {
            width: 870px;
            height: 110px;
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
            <a href="MOBA.php" id="linkmenu">MOBA</a>
        </nav>
    </header>
    <main>
        <div>
            <h1>Jogos de Cartas</h1>
            <p>Os jogos de cartas têm uma história longa e fascinante, tanto no mundo físico quanto no digital. Eles
                envolvem estratégia, tomada de decisões e uma pitada de sorte. Aqui está uma visão geral da história,
                competitividade e alguns dados sobre jogos de cartas.</p>
            <br>
            <h2>História:</h2>
            <p>Os jogos de cartas têm uma história que remonta a séculos. Os primeiros registros de jogos de cartas
                datam
                do século IX na China, onde foram encontrados os primeiros baralhos conhecidos. Esses jogos de cartas
                foram
                se espalhando pelo mundo, chegando à Europa durante a Idade Média.</p>
            <br>
            <p>Ao longo do tempo, diferentes jogos de cartas foram desenvolvidos em todo o mundo. Alguns exemplos
                famosos
                incluem o "Poker" nos Estados Unidos, o "Blackjack" na França e o "Gin Rummy" na América do Norte. Além
                disso, os jogos de cartas também foram adaptados para jogos digitais, tornando-se populares em
                plataformas
                online e dispositivos móveis.</p>
            <br>
            <h2>Competitividade:</h2>
            <p>Os jogos de cartas têm uma cena competitiva rica, tanto em torneios presenciais quanto online. Jogadores
                habilidosos se enfrentam em partidas estratégicas, utilizando táticas, blefes e aprimorando suas
                habilidades
                de leitura de jogo.</p>
            <br>
            <a href="https://hearthstone.blizzard.com/pt-br/news/18648148" target="_blank">
                <img class="anuncio-meio" src="imagens/anuncio-meio-cartas.avif" alt="">
            </a>
            <br>
            O "Poker" é um exemplo de um jogo de cartas com uma cena competitiva estabelecida. Existem muitos torneios
            de poker em todo o mundo, como a "World Series of Poker" e o "World Poker Tour", onde os jogadores competem
            por premiações significativas e prestígio.
            <br>
            Outro exemplo é o "Hearthstone", um jogo de cartas digital desenvolvido pela Blizzard Entertainment. Ele tem
            uma cena competitiva ativa, com torneios e campeonatos organizados pela própria empresa e por terceiros. Os
            jogadores profissionais de "Hearthstone" competem por premiações em dinheiro e reconhecimento na comunidade.
            <br>
            <h2>Dados de jogos de cartas:</h2>
            <br>
            <p>Os jogos de cartas, tanto físicos quanto digitais, têm uma base de fãs dedicada e são extremamente
                populares. Aqui estão alguns dados interessantes sobre jogos de cartas:</p>
            <h3>Poker</h3>
            <br>
            <p>É amplamente considerado o jogo de cartas mais popular do mundo. É estimado que existam mais de
                100 milhões de jogadores regulares de poker em todo o mundo.</p>
            <br>
            <h3>Hearthstone</h3>
            <p>Possui uma base de jogadores de mais de 100 milhões de pessoas. O jogo foi lançado em 2014 e
                se tornou um dos principais títulos do gênero de jogos de cartas digitais.</p>
            <br>
            <h3>Magic: The Gathering</h3>
            <p>É um dos jogos de cartas colecionáveis mais antigos e populares. Lançado em 1993,
                ele tem uma cena competitiva ativa, com torneios regionais e internacionais.</p>
            <br>
            <p>Os jogos de cartas digitais têm a vantagem de poderem ser jogados online contra oponentes de todo o
                mundo,
                permitindo uma experiência de jogo competitiva contínua.

                Alguns jogos de cartas digitais oferecem prêmios em dinheiro para os jogadores mais habilidosos.
                Torneios
                online podem ter premiações significativas e até mesmo contratos profissionais para jogadores de alto
                nível.

                Esses são apenas alguns dados gerais sobre a história, competitividade e informações sobre jogos de
                cartas.
                Os jogos de cartas continuam a evoluir e a atrair jogadores de diferentes partes do mundo,
                proporcionando um
                ambiente desafiador e estratégico para os amantes desse tipo de jogo.</p>
        </div>
    </main>
    <aside>
        <nav>
            <a href="https://www.ubisoft.com/pt-br/game/uno/uno" target="_blank">
                <img src="imagens/anuncio-cartas.png" alt="" id="anuncio">
            </a>
        </nav>
    </aside>
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <a href="index.php">
                    <img src="imagens/logo.png" alt="" id="logofooter">
                </a>
                <p>it's all about your dreams.</p>
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