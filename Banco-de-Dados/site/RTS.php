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
    <title>RTS</title>
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
            <a href="FPS.php" id="linkmenu">FPS</a>
            <a href="Luta.php" id="linkmenu">Luta</a>
            <a href="esportes.php" id="linkmenu">Esportes</a>
            <a href="cartas.php" id="linkmenu">Cartas</a>
            <a href="MOBA.php" id="linkmenu">MOBA</a>
        </nav>
    </header>
    <main>
        <div>
            <h1>Jogos RTS</h1>
            <p>Os jogos RTS (Real-Time Strategy) são um gênero popular na indústria de jogos, que envolvem estratégia em
                tempo real e tomada de decisões rápidas. Aqui está uma visão geral da história, competitividade e alguns
                dados sobre jogos RTS.</p>
            <br>
            <h2>História:</h2>
            <p>Os jogos RTS remontam ao início dos anos 1980, com títulos como "Utopia" e "The Ancient Art of War". No
                entanto, foi o lançamento de "Dune II" pela Westwood Studios em 1992 que popularizou o gênero. "Dune II"
                foi
                o primeiro jogo a apresentar a fórmula clássica de um RTS, onde os jogadores controlam uma facção e
                constroem uma base para coletar recursos, treinar unidades e enfrentar inimigos.</p>
            <br>
            <p> No final da década de 1990 e início dos anos 2000, os jogos RTS atingiram seu auge de popularidade.
                Títulos
                como "Warcraft II", "StarCraft" e "Age of Empires II" se tornaram icônicos e estabeleceram muitos dos
                elementos fundamentais dos jogos RTS modernos.</p>
            <br>
            <h2>Competitividade:</h2>
            <p>Os jogos RTS têm uma forte cultura competitiva. Desde os primeiros dias do gênero, os jogadores competem
                uns
                contra os outros em partidas multiplayer, desafiando suas habilidades estratégicas e capacidade de
                reagir
                rapidamente às mudanças do jogo.</p>
            <br>
            <h3>StarCraft</h3>
            <p>É um dos jogos RTS mais competitivos e influentes de todos os tempos. Lançado em 1998 pela
                Blizzard Entertainment, ele estabeleceu a base para a cena competitiva dos jogos RTS. O jogo possui três
                facções únicas e balanceadas, e sua expansão, "StarCraft: Brood War", tornou-se especialmente popular na
                Coreia do Sul, onde os jogadores profissionais se tornaram verdadeiras celebridades do eSports.</p>
            <br>
            <a href="https://play.google.com/store/apps/details?id=com.supercell.clashofclans&hl=pt_BR&gl=US"
                target="_blank" rel="noopener noreferrer">
                <img class="anuncio-meio" src="imagens/anuncio-meio-RTS.jpg" alt="">
            </a>
            <br>
            <h3>Warcraft III</h3>
            <p>Outros jogos RTS também têm uma presença competitiva significativa. "Warcraft III" da Blizzard e a série
                "Command & Conquer" da Westwood Studios são exemplos de jogos que tiveram sucesso em competições
                profissionais e ligas organizadas.</p>
            <br>
            <h2>Dados de jogos RTS:</h2>
            <p>Os jogos RTS atraem uma base de fãs dedicada e têm uma rica história competitiva. Aqui estão alguns dados
                interessantes sobre jogos RTS:</p>
            <br>
            <h3>StarCraft II</h3>
            <p>Sequência do aclamado "StarCraft", lançado em 2010, é um dos jogos RTS mais jogados
                atualmente. Ele mantém uma cena competitiva ativa, com torneios regulares e uma liga oficial, a
                "StarCraft
                II World Championship Series".</p>
            <br>
            <h3>Warcraft III: Reign of Chaos</h3>
            <p>Sua expansão "The Frozen Throne" lançados em 2002, têm uma comunidade ativa
                de jogadores e também são conhecidos por sua cena competitiva. O jogo foi responsável pelo surgimento do
                gênero de jogos de defesa de torres (tower defense) e de jogos do tipo MOBA.</p>
            <br>
            <p>O maior prêmio em dinheiro já oferecido em um torneio de RTS foi no "The International 2019" de "Dota 2"
                (um
                jogo MOBA), que distribuiu mais de US$ 34 milhões. Embora não seja estritamente um RTS, esse número
                mostra o
                potencial dos eSports em termos de premiação.

                O gênero RTS tem sido adaptado para dispositivos móveis, com jogos como "Clash Royale" e "Clash of
                Clans"
                alcançando enorme popularidade.

                Estes são apenas alguns dados gerais sobre a história, competitividade e informações sobre jogos RTS. O
                gênero continua a evoluir, e os jogadores continuam a desfrutar de desafios estratégicos em tempo real,
                competindo uns contra os outros em partidas emocionantes.</p>
        </div>
    </main>
    <aside>
        <nav>
            <a href="https://supercell.com/en/games/clashroyale/" target="_blank">
                <img src="imagens/anuncio-rts.jpg" alt="" id="anuncio">
            </a>
        </nav>
    </aside>
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <a href="index.php">
                    <img src="imagens/foto-logo-footer.jpg" alt="" id="logofooter">
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