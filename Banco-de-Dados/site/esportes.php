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
    <title>Esportes</title>
    <style>
        .anuncio-meio {
            width: 870px;
            height: 130px;
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
            <a href="FPS.php" id="linkmenu">FPS</a>
            <a href="Luta.php" id="linkmenu">Luta</a>
            <a href="cartas.php" id="linkmenu">Cartas</a>
            <a href="MOBA.php" id="linkmenu">MOBA</a>
        </nav>
    </header>
    <main>
        <div>
            <h1>Jogos Esportivos</h1>
            <p>Os jogos de esportes têm uma longa história e são um dos gêneros mais populares na indústria de jogos.
                Eles
                recriam esportes tradicionais, como futebol, basquete, futebol americano, beisebol, entre outros,
                proporcionando
                aos jogadores a oportunidade de participar de competições virtuais. Aqui está uma visão geral da
                história,
                competitividade e alguns dados sobre jogos de esportes.</p>
            <br>
            <h2>História:</h2>
            <p>Os jogos de esportes tiveram início na década de 1970, com títulos simples, como "Pong" e "Tennis". Esses
                jogos
                foram seguidos por lançamentos mais complexos, como "Tecmo Bowl" e "NBA Jam" nos anos 1980 e 1990. No
                entanto,
                foi com a evolução da tecnologia e dos consoles que os jogos de esportes realmente ganharam destaque.
                <br>
                Com o advento dos consoles mais avançados, como o PlayStation e o Xbox, os jogos de esportes se tornaram
                mais
                realistas e detalhados. Eles passaram a incluir gráficos aprimorados, controles mais precisos e a
                simulação
                de
                estratégias e táticas dos esportes reais. A série "FIFA" da EA Sports, por exemplo, foi lançada pela
                primeira
                vez em 1993 e se tornou um marco para os jogos de futebol.
            </p>
            <br>
            <h2>Competitividade:</h2>
            <p>Os jogos de esportes têm uma forte presença competitiva tanto em torneios presenciais quanto online.
                Muitos
                jogadores se dedicam a aprimorar suas habilidades em esportes virtuais específicos, participando de
                competições,
                ligas e campeonatos.

                A série "FIFA" é um exemplo de um jogo de esportes com uma cena competitiva estabelecida. A EA Sports
                realiza
                eventos oficiais, como a "FIFA eWorld Cup", onde os melhores jogadores competem por prêmios em dinheiro
                e o
                título de campeão mundial.</p>
            <br>
            <p>Além disso, outros jogos de esportes, como "NBA 2K" para basquete, "Madden NFL" para futebol americano e
                "Rocket
                League" para futebol veicular, também têm comunidades competitivas ativas e torneios organizados.</p>
            <br>
            <a href="https://www.ea.com/pt-br/games/fifa/fifa-23" target="_blank" rel="noopener noreferrer">
                <img class="anuncio-meio" src="imagens/anuncio-meio-esportes.jpg" alt="">
            </a>
            <br>
            <h2>Dados de jogos de esportes:</h2>
            <p>Os jogos de esportes são extremamente populares e têm uma base de fãs global. Aqui estão alguns dados
                interessantes sobre jogos de esportes:</p>
            <br>
            <h3>FIFA</h3>
            <p>A série "FIFA" da EA Sports é uma das mais vendidas no gênero de jogos de esportes. O jogo vendeu mais de
                325
                milhões de cópias desde o seu lançamento em 1993.</p>
            <br>
            <h3>Rocket League</h3>
            <p>Um jogo de futebol veicular lançado em 2015, alcançou mais de 75 milhões de jogadores em 2020.
                O jogo combina carros e futebol em uma mistura única e emocionante.</p>
            <br>
            <h3>NBA 2K21</h3>
            <p>Lançado em 2020, é um dos jogos de esportes mais populares no gênero de basquete. Ele vendeu mais de
                8 milhões de cópias em seu primeiro mês de lançamento.</p>
            <br>
            <p>Os jogos de esportes também são conhecidos por suas versões anuais, que trazem atualizações de elenco,
                estatísticas e melhorias de jogabilidade. Isso permite que os jogadores se mantenham atualizados com as
                mudanças
                nas equipes e nas ligas.

                Além dos consoles, os jogos de esportes também têm uma presença significativa em dispositivos móveis,
                com
                versões adaptadas para smartphones e tablets.
                <br>
                Esses são apenas alguns dados gerais sobre a história, competitividade e informações sobre jogos de
                esportes. O
                gênero continua a atrair jogadores de todo o mundo, proporcionando uma experiência imersiva e
                emocionante
                para
                aqueles que desejam participar de competições virtuais nos esportes que amam.
            </p>
        </div>
    </main>
    <aside>
        <nav>
            <a href="https://nba.2k.com/2k23/" target="_blank">
                <img src="imagens/anuncio-esportes.webp" alt="" id="anuncio">
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