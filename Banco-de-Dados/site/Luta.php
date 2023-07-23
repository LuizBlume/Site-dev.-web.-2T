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
    <title>Luta</title>
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
            <a href="RTS.php" id="linkmenu">RTS</a>
            <a href="FPS.php" id="linkmenu">FPS</a>
            <a href="esportes.php" id="linkmenu">Esportes</a>
            <a href="cartas.php" id="linkmenu">Cartas</a>
            <a href="MOBA.php" id="linkmenu">MOBA</a>
        </nav>
    </header>
    <main>
        <div>
            <h1>Jogos de Luta</h1>
            <p>Os jogos de luta têm uma história rica e uma cena competitiva vibrante, proporcionando aos jogadores a
                emoção de enfrentar adversários em combates mano a mano. Aqui está uma visão geral da história,
                competitividade e alguns dados sobre jogos de luta.</p>

            <h2>História:</h2>
            <p>Os jogos de luta têm suas raízes no gênero de jogos de arcade, com o lançamento de "Street Fighter" em
                1987
                pela Capcom. O jogo introduziu mecânicas de luta com personagens únicos e especiais, além de combos e
                movimentos especiais que se tornaram características do gênero.

                Ao longo das décadas seguintes, os jogos de luta evoluíram e expandiram-se com títulos icônicos, como a
                série "Mortal Kombat", "Tekken", "Super Smash Bros.", "Guilty Gear" e "Marvel vs. Capcom". Cada franquia
                trouxe novas mecânicas, estilos de luta e personagens, cativando os jogadores e fortalecendo a
                comunidade de
                jogos de luta.</p>

            <h2>Competitividade:</h2>
            <p>Os jogos de luta têm uma comunidade competitiva ativa e são um dos principais pilares dos eSports.
                Torneios
                de jogos de luta são realizados em todo o mundo, nos quais os jogadores profissionais e entusiastas
                competem
                para provar suas habilidades e alcançar a glória.</p>
            <br>
            <p>A EVO Championship Series é um dos maiores e mais prestigiosos eventos de jogos de luta. Ele reúne
                jogadores
                de diferentes franquias, incluindo "Street Fighter", "Tekken", "Super Smash Bros." e muitas outras, para
                disputarem prêmios significativos e conquistarem o título de campeão.</p>
            <br>
            <p>Além dos torneios offline, os jogos de luta também possuem uma forte presença online, com jogadores
                participando de partidas classificatórias e competindo em ligas e rankings.</p>
            <br>
            <h2>Dados de jogos de luta:</h2>
            <p>Os jogos de luta atraem uma base de fãs apaixonados e têm uma longa história de sucesso. Aqui estão
                alguns
                dados interessantes sobre jogos de luta:</p>
            <br>
            <a href="https://www.mortalkombat.com/pt-br" target="_blank" rel="noopener noreferrer">
                <img class="anuncio-meio" src="imagens/anuncio-meio-luta.jpg" alt="">
            </a>
            <br>
            <h3>Street Fighter V</h3>
            <p>É um dos jogos de luta mais populares atualmente. Lançado em 2016 pela Capcom, o jogo
                mantém uma cena competitiva ativa e é um dos principais títulos do circuito de torneios de jogos de
                luta.</p>
            <br>
            <h3>Super Smash Bros. Ultimate</h3>
            <p>Para Nintendo Switch é um dos jogos de luta mais vendidos de todos os tempos. O
                jogo combina personagens de várias franquias da Nintendo e de outras empresas, proporcionando uma
                experiência única de luta multiplayer.</p>
            <br>
            <h3>Mortal Kombat</h3>
            <p>A série Mortal Kombat é conhecida por sua jogabilidade brutal e fatalities icônicos. A franquia é uma das
                mais antigas do gênero de jogos de luta, com uma história que remonta a 1992, e continua sendo uma das
                mais
                populares.</p>
            <br>
            <h3>Tekken 7</h3>
            <p>Lançado em 2015, é outro exemplo de um jogo de luta de sucesso com uma cena competitiva robusta.
                O jogo apresenta um sistema de combate profundo e uma variedade de personagens carismáticos.</p>
            <br>
            <p>Muitos jogos de luta também possuem uma comunidade dedicada de modding, onde os jogadores criam e
                compartilham mods que adicionam novos personagens, trajes e outras personalizações ao jogo.

                Esses são apenas alguns dados gerais sobre a história, competitividade e informações sobre jogos de
                luta. O
                gênero continua a evoluir, trazendo novas mecânicas e personagens para encantar os fãs e fornecer
                emocionantes batalhas virtuais.</p>
        </div>
    </main>
    <aside>
        <nav>
            <a href="https://www.streetfighter.com/6/pt-br" target="_blank">
                <img src="imagens/anuncio-Luta.jpg" alt="" id="anuncio">
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
                    <a href="https://www.tecmundo.com.br/voxel/noticias" class="footer-link"
                        target="_blank">Tecmundo</a>
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
                    <a href="https://www.tiktok.com/@blume.047" class="footer-link" target="_blank">Tik Tok</a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/luiz-fernando-532447280/" class="footer-link"
                        target="_blank">Linkedin</a>
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