<?php include 'visitas.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9790715004022716"
        crossorigin="anonymous"></script>
    <meta name="google-adsense-account" content="ca-pub-9790715004022716">
    <link rel="icon" href="imagem/favicon.svg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio Elcio Sava | Sites, Sistemas e PCs Gamer Customizados</title>
    <meta name="description"
        content="Portfólio de Elcio Sava, especialista em criação de sites, sistemas personalizados e montagem de PCs gamer customizados. Veja meus projetos e entre em contato!">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Rajdhani:wght@300;400;500;600;700&display=swap');
    </style>
    <link rel="stylesheet" href="css/style.css">
    <title>Foxtron</title>
    <style>
        * {
  margin: 0;
  padding: 0;
  border: 0;
  box-sizing: border-box;
  font-family: 'Inter', sans-serif;
}

/*bolhas aleatorias*/
.bolhas {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  z-index: -1;
  /* Fica no fundo */
}

.bolha {
  position: absolute;
  border-radius: 50%;
  background: #ff0048;
  animation: flutuar 5s infinite ease-in-out alternate;
}

.bolha:nth-child(1) {
  width: 7px;
  height: 7px;
  left: 10%;
  top: 20%;
  animation-delay: 0s;
}

.bolha:nth-child(2) {
  width: 9px;
  height: 9px;
  left: 50%;
  top: 40%;
  animation-delay: 2s;
}

.bolha:nth-child(3) {
  width: 5px;
  height: 5px;
  left: 30%;
  top: 70%;
  animation-delay: 4s;
}

.bolha:nth-child(4) {
  width: 10px;
  height: 10px;
  left: 70%;
  top: 30%;
  animation-delay: 6s;
}

.bolha:nth-child(5) {
  width: 6px;
  height: 6px;
  left: 80%;
  top: 60%;
  animation-delay: 3s;
}

@keyframes flutuar {
  0% {
    transform: translate(0, 0) scale(1);
  }

  50% {
    transform: translate(60px, -80px) scale(1.1);
  }

  100% {
    transform: translate(-60px, 80px) scale(1);
  }
}

/*fim das bolhas*/

html {
  scroll-behavior: smooth;
}

body {
  background: linear-gradient(to right,
      #300513,
      #090607 30%,
      #090607 70%,
      #300513);
  font-family: "Rajdhani", sans-serif;
}

/* HEADER */
header {
  height: 80px;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 10;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-content: space-around;
  justify-content: space-around;
  text-align: center;
  font-weight: 500;
}

header nav ul {
  display: flex;
  justify-content: center;
  align-items: center;
  list-style: none;
  height: 100%;
  font-size: 1.3em;
}

header nav ul li a {
  color: #fff;
  text-decoration: none;
  padding: 10px 20px;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
  transition: color 0.3s ease;
}

header nav ul li a:hover {
  color: #ff0048;
}

header img {
  width: 60px;
}

.navbar {
  position: fixed;
  top: 0;
  width: 100%;
  padding: 20px 40px;
  background: transparent;
  transition: background 0.4s ease, box-shadow 0.4s ease,
    border-bottom 0.4s ease;
  z-index: 999;
}

.navbar ul {
  list-style: none;
  display: flex;
  gap: 30px;
}

.navbar a {
  text-decoration: none;
  color: white;
  font-weight: bold;
  font-family: sans-serif;
}

.navbar.scrolled {
  background: rgba(10, 10, 10, 0.9);
  backdrop-filter: blur(4px);
}

.botao {
  position: relative;
  display: inline-block;
  background: #ff0048;
  border-radius: 4px;
  overflow: hidden;
  color: #fff;
  padding: 10px 20px;
  text-decoration: none;
}

.botao span {
  display: inline-block;
  white-space: nowrap;
}

.botao:hover span {
  animation: deslizar 0.2s ease-in-out forwards;
  color: #fff;
}

.botao-card {
  position: relative;
  display: inline-block;
  background: #ff0048;
  border-radius: 4px;
  overflow: hidden;
  text-decoration: none;
  color: white;
  font-family: sans-serif;
  padding: 6px;
  font-size: 0.7em;
}

.botao-card span {
  display: inline-block;
  white-space: nowrap;
}

.botao-card:hover span {
  animation: deslizar 0.2s ease-in-out forwards;
  color: #fff;
}

@keyframes deslizar {
  0% {
    transform: translateX(0%);
  }

  50% {
    transform: translateX(-100%);
  }

  51% {
    transform: translateX(100%);
  }

  100% {
    transform: translateX(0%);
  }
}

#inicio {
  background-color: transparent;
  height: 100vh;
  scroll-margin-top: 0;
}

.container {
  padding: 50px 10px 0 10px;
  display: flex;
  justify-content: space-between;
  flex-direction: column;
  text-align: justify;
  height: auto;
  min-height: 600px;
}

.container .texto_header {
  margin-top: 50px;
}

.container p {
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}

.container h1 {
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
  font-size: 1.7em;
}

.destaque {
  color: #ff0048;
  font-weight: bold;
  display: inline-block;
  min-width: 300px;
  text-align: justify;
  transition: opacity 0.5s ease;
}

.scroll-down {
  width: 50px;
  height: 90px;
  border: 2px solid rgba(255, 0, 0, 0.4);
  border-radius: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  transition: border-color 0.3s ease;
  margin: 40px auto 0;
  /* centralizado e com espaÃ§amento */
}

.arrow {
  animation: bounce 1.2s infinite;
}

@keyframes bounce {

  0%,
  100% {
    transform: translateY(0);
  }

  50% {
    transform: translateY(8px);
  }
}

.scroll-down:hover {
  border-color: rgba(255, 0, 0, 0.7);
}

/* SECTIONS */
section {
  height: calc(100vh - 80px);
  scroll-margin-top: 80px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  flex-direction: column;
  font-size: 2em;
}

/*CARDS SERVIÃ‡OS*/
#servicos {
  padding: 80px 20px;
  text-align: center;
  color: #fff;
}

#servicos h2 {
  font-size: 1.5em;
  margin-bottom: 40px;
  color: #ff4f81;
}

.cards {
  display: flex;
  justify-content: center;
  gap: 30px;
  flex-wrap: wrap;
}

.card {
  background-color: #100609;
  border-radius: 6px;
  padding: 30px;
  width: 415px;
  height: 310px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  text-align: center;
  border: 1px solid;
  border-image: linear-gradient(to bottom, #702123, #371114) 1;
}

.card img {
  width: 70px;
}

.card h3 {
  font-size: 0.9em;
  margin-bottom: 15px;
  color: #ffffff;
}

.card p {
  font-size: 0.6em;
  margin-bottom: 20px;
  color: #ccc;
}

.card:hover {
  transform: translateY(-10px);
  background: radial-gradient(circle, #280510 0%, #100609 70%);
  cursor: default;
}

.slider {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  align-content: center;
  max-width: 1500px;
}

.slider-row {
  overflow: hidden;
  width: 100%;
  padding: 20px;
}

.item {
  background: #1a1a1a;
  color: #ffffff;
  padding: 10px;
  border-radius: 3px;
  flex-shrink: 0;
  white-space: nowrap;
  width: auto;
  height: 45px;
  font-size: 0.5em;
  display: flex;
  align-items: center;
}

.item img {
  width: 35px;
  height: 35px;
  margin-right: 7px;
}

.slider-track {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
  justify-content: center;
  flex-direction: row;
  padding-top: 50px;
}

#experiencia {
  padding: 50px 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  height: auto;
}

.head {
  position: relative;
}

.head h2 {
  font-size: 1.8em;
  font-weight: bold;
}

.head .numero {
  font-size: 2.5em;
  color: #ff0048;
}

.head .subtitulo {
  max-width: 600px;
  margin: 0;
  font-size: 0.8em;
  color: #ccc;
}

.head::before {
  content: "FOXTRON";
  position: absolute;
  font-size: 12vw;
  font-weight: bold;
  color: rgba(255, 255, 255, 0.05);
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  white-space: nowrap;
  pointer-events: none;
  z-index: -1;
}

#experiencia .container {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr;
  grid-auto-rows: min-content;
  gap: 40px;
  width: 100%;
  max-width: 1200px;
}

.item-grande {
  grid-row: 1 / 3;
  background: linear-gradient(to right, #300513, #900c3f);
  border-radius: 12px;
  padding: clamp(20px, 5vw, 50px);
  color: white;
  max-height: 400px;
  text-align: left;
}

.item-grande h2 {
  font-size: 4.5em;
}

.item-grande h3 {
  font-size: 1.2em;
}

.item-grande p {
  font-size: 0.7em;
}

.item-grande .ano {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  text-transform: capitalize;
  justify-content: space-between;
}

.item-grande .ano h3 {
  width: 158px;
  white-space: normal;
}

.item-pequeno {
  background: #1a1a1a;
  color: white;
  border-radius: 12px;
  padding: clamp(10px, 2vw, 20px);
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  align-self: start;
  height: 150px;
}

.item-pequeno h3 {
  font-size: 1.2em;
}

.item-pequeno p {
  margin-top: 10px;
  font-size: 0.6em;
}

.brilha {
  position: relative;
  border-radius: 12px;
  padding: 20px;
  background: #1a1a1a;
  color: white;
  overflow: hidden;
}

.brilha::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: 12px;
  padding: 1.5px;
  background: radial-gradient(circle at var(--x) var(--y),
      rgba(255, 0, 76, 0.8),
      transparent 80%);
  -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  pointer-events: none;
  transition: background 0.2s ease;
}

.brilha * {
  position: relative;
  z-index: 1;
}

/* Responsivo */
@media (max-width: 992px) {
  .container {
    grid-template-columns: 1fr;
    grid-template-rows: auto;
  }

  .item-grande {
    grid-row: auto;
  }
}

/* habilidades */
#skills {
  padding: 50px;
  border-radius: 10px;
  color: white;
  max-width: 900px;
  margin: auto;
  text-align: center;
}

#skills .linguagens {
  width: 100%;
}

.skill {
  margin-bottom: 25px;
  text-align: left;
}

.legenda {
  display: flex;
  flex-wrap: nowrap;
  justify-content: space-between;
  flex-direction: row;
}

.porcent-80 {
  width: 80%;
}

.porcent-75 {
  width: 75%;
}

.porcent-65 {
  width: 65%;
}

.porcent-45 {
  width: 45%;
}

.skill span {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 0.6em;
  width: auto;
}

.progress-bar {
  background: #333;
  border-radius: 5px;
  overflow: hidden;
  height: 7px;
}

.progress {
  background: #ff0048;
  width: 0%;
  height: 100%;
  border-radius: 5px;
  transition: width 1.5s ease-in-out;
}

/* RESPONSIVO PARA MOBILE */
@media (max-width: 768px) {
  header {
    height: auto;
    /* deixa o conteúdo determinar a altura */
    padding: 10px 0;
    background-color: #000;
    /* ou o que preferir */
    display: flex;
    justify-content: center;
    align-items: center;
  }

  header nav {
    display: none;
    /* oculta o menu no mobile */
  }

  header img {
    width: 130px;
    margin: 0 auto;
  }

  section {
    height: auto;
    /* deixa a altura livre no mobile */
    padding: 30px 10px;
    scroll-margin-top: 60px;
  }

  .navbar {
    position: static;
  }

  #inicio {
    background-color: transparent;
    height: auto;
    scroll-margin-top: 0;
  }

  .container {
    padding: 20px 10px;
    text-align: center;
    height: auto;
  }

  .container h1 {
    font-size: 1.5em;
    word-break: break-word;
    /* evita estouro de palavras */
  }

  .container p {
    font-size: 1em;
    text-align: center;
  }

  .destaque {
    color: #ff0048;
    font-weight: bold;
    text-align: center;
    transition: opacity 0.5s ease;
    min-width: unset;
    white-space: normal;
  }

  .scroll-down {
    margin: 30px auto 0;
  }

  #experiencia {
    padding: 30px 10px;
  }

  .head h2 {
    font-size: 1.3em;
  }

  .head .numero {
    font-size: 2em;
  }

  .head .subtitulo {
    font-size: 0.9em;
    padding: 0 10px;
  }

  .head::before {
    font-size: 20vw;
  }

  #experiencia .container {
    display: flex;
    flex-direction: column;
    gap: 20px;
    width: 100%;
    max-width: 100%;
  }

  .item-grande {
    max-height: none;
    text-align: center;
    padding: 20px;
  }

  .item-grande .ano {
    justify-content: center;
    flex-direction: column;
    gap: 10px;
  }

  .item-grande h2 {
    font-size: 3em;
  }

  .item-grande h3 {
    font-size: 1em;
  }

  .item-grande p {
    font-size: 0.9em;
  }

  .item-pequeno {
    width: 100%;
    height: auto;
    padding: 15px;
  }

  .item-pequeno h3 {
    font-size: 1.4em;
  }

  .item-pequeno p {
    font-size: 0.9em;
  }
}
    </style>
</head>

<body>
    <div class="bolhas">
        <div class="bolha"></div>
        <div class="bolha"></div>
        <div class="bolha"></div>
        <div class="bolha"></div>
        <div class="bolha"></div>
    </div>

    <header class="navbar">
        <img src="imagem/folder_code.svg" alt="logo">
        <nav>
            <ul>
                <li><a href="#inicio">Início</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#experiencia">Experiencia</a></li>
                <li><a href="#skills">Habilidades</a></li>
                <li><a href="#faqs">FAQ's</a></li>
            </ul>
        </nav>
        <nav>
            <ul>
                <li><a href="#contato" class="botao"><span>Contato</span></a></li>
            </ul>
        </nav>
    </header>

    <section id="inicio">
        <div class="container">
            <div class="texto_header">
                <h1>Portfólio Profissional</h1>
                <h1>
                    <span class="destaque" id="texto-dinamico">Sites</span>
                </h1>
                <p>Aqui você encontra alguns dos meus projetos,</p>
                <p>reunindo tecnologia, design e performance.</p>
            </div>
            <div class="scroll-down"
                onclick="document.querySelector('#servicos').scrollIntoView({ behavior: 'smooth' });">
                <svg class="arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <polyline points="19 12 12 19 5 12"></polyline>
                </svg>
            </div>
        </div>
    </section>

    <section id="servicos">
        <div class="cards">
            <div class="card">
                <img src="imagem/internet_devices.svg" alt="">
                <h3>Criação de Sites & Sistemas</h3>
                <p>Desenvolvimento de sites modernos, responsivos e sistemas personalizados para empresas e projetos.
                </p>
            </div>
            <div class="card">
                <img src="imagem/graduation_school.svg" alt="">
                <h3>Cursos e Treinamentos</h3>
                <p>Capacitação em tecnologia, cursos de desenvolvimento web e muito mais, com foco na prática.</p>
                <a href="cursos/index.php" class="botao-card"><span>Conhecer</span></a>

            </div>
            <div class="card">
                <img src="imagem/support_rede.svg" alt="">
                <h3>Suporte & Consultoria</h3>
                <p>Consultoria, manutenção e otimização de sistemas e equipamentos, com foco em performance e segurança.
                </p>
            </div>
        </div>
        <div class="slider">
            <div class="slider-row left">
                <div class="slider-track">
                    <div class="item"><img src="imagem/hands.svg" alt=""><span>Consultoria</span></div>
                    <div class="item"><img src="imagem/systens.svg" alt="">Sistemas</div>
                    <div class="item"><img src="imagem/support_rede.svg" alt=""><span>Suporte</span></div>
                    <div class="item"><img src="imagem/rss_feed.svg" alt=""><span>Blog</span></div>
                    <div class="item"><img src="imagem/shopping.svg" alt=""><span>Loja online</span></div>
                    <div class="item"><img src="imagem/site.svg" alt=""><span>Sites</span></div>
                    <div class="item"><img src="imagem/router_internet.svg" alt=""><span>Redes domésticas</span></div>
                    <div class="item"><img src="imagem/services.svg" alt=""><span>Serviços</span></div>
                    <div class="item"><img src="imagem/host.svg" alt="">T.I.</div>
                    <div class="item"><img src="imagem/graduation_school.svg" alt=""><span>Cursos</span></div>
                    <div class="item"><img src="imagem/training.svg" alt=""><span>Treinamentos</span></div>
                    <div class="item"><img src="imagem/hardware.svg" alt=""><span>Equipamentos</span></div>
                    <div class="item"><img src="imagem/map.svg" alt=""><span>Projetos</span></div>
                </div>
            </div>
        </div>

    </section>

    <section id="experiencia">
        <div class="head">
            <h2><span class="numero">12+</span>
                <h2>Anos de Experiência em</h2>
                <h2><span class="destaque">Desenvolvimento Web!</span></h2>
                <p class="subtitulo">
                    Projetos Criativos, Sistemas Personalizados e Soluções Digitais Sob Medida.
                </p>
        </div>

        <div class="container">
            <div class="item-grande">
                <div class="ano">
                    <h2>12+ </h2>
                    <h3>Anos de experiencia</h3>
                </div>
                <div class="ano-texto">
                    <p>Explore meu portfólio com soluções reais e criativas para o seu negócio.</p>
                </div>

            </div>
            <div class="item-pequeno brilha">
                <h3>50+</h3>
                <p>Projetos concluidos na web.</p>
            </div>
            <div class="item-pequeno brilha">
                <h3>100+</h3>
                <p>Cursos já fornecidos.</p>
            </div>
            <div class="item-pequeno brilha">
                <h3>20+</h3>
                <p>Avaliações positivas no Google.</p>
            </div>
            <div class="item-pequeno brilha">
                <h3>1,000+</h3>
                <p>Clientes atendidos.</p>
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="linguagens">
            <h2>Minhas Habilidades</h2>

            <div class="skill">
                <div class="legenda porcent-100"><span>HTML</span><span>100%</span></div>
                <div class="progress-bar">
                    <div class="progress" data-value="100%"></div>
                </div>
            </div>

            <div class="skill">
                <div class="legenda porcent-80"><span>CSS</span><span>80%</span></div>
                <div class="progress-bar">
                    <div class="progress" data-value="80%"></div>
                </div>
            </div>
            <div class="skill">
                <div class="legenda porcent-80"><span>SQL</span><span>80%</span></div>
                <div class="progress-bar">
                    <div class="progress" data-value="80%"></div>
                </div>
            </div>

            <div class="skill">
                <div class="legenda porcent-75"><span>PHP</span><span>75%</span></div>
                <div class="progress-bar">
                    <div class="progress" data-value="75%"></div>
                </div>
            </div>

            <div class="skill">
                <div class="legenda porcent-45"><span>JavaScript</span><span>45%</span></div>
                <div class="progress-bar">
                    <div class="progress" data-value="45%"></div>
                </div>
            </div>

        </div>
    </section>

    <section id="faqs">

    </section>
    <section id="contato">
        <!-- anuncios do google -->
        <script async
            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9790715004022716"
            crossorigin="anonymous"></script>
        <!-- fox_nuncio -->
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9790715004022716"
            data-ad-slot="7568420639" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </section>

    <script>
        const palavras = ["Sites", "Sistemas", "Cursos", "Consultoria"];
        let index = 0;
        const texto = document.getElementById("texto-dinamico");

        setInterval(() => {
            index = (index + 1) % palavras.length;
            texto.style.opacity = 0;
            setTimeout(() => {
                texto.textContent = palavras[index];
                texto.style.opacity = 1;
            }, 500);
        }, 2500);

        const cards = document.querySelectorAll('.brilha');

        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = ((e.clientX - rect.left) / rect.width) * 100;
                const y = ((e.clientY - rect.top) / rect.height) * 100;
                card.style.setProperty('--x', `${x}%`);
                card.style.setProperty('--y', `${y}%`);
            });
            card.addEventListener('mouseleave', () => {
                card.style.removeProperty('--x');
                card.style.removeProperty('--y');
            });
        });

        document.querySelectorAll('.progress').forEach(bar => {
            const value = bar.getAttribute('data-value');
            setTimeout(() => {
                bar.style.width = value;
            }, 500);
        });


        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 60) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>

</body>

</html>