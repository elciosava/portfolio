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