<?php
  $mensagemWhatsapp = "Olá, tenho interesse em conhecer melhor o Sistema Condomaze. Podemos conversar?";
  $mensagemCodificada = urlencode($mensagemWhatsapp);
  $numeroWhatsapp = "5519992502546"; 
  $linkWhatsapp = "https://wa.me/{$numeroWhatsapp}?text={$mensagemCodificada}";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CRC Soluções Condominiais</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta charset="UTF-8">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- App favicon -->
  <link rel="shortcut icon" href="img_pwa/logo_icon.ico">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.8/dist/inputmask.min.js"></script>

  <!-- Main CSS File -->
  <link href="assets/css/main.css?v=<?php echo filemtime('assets/css/main.css'); ?>" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

<a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
  <img src="assets/img/CRC_novo_logo_130.jpg" alt="">
</a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Inicial</a></li>
          <li><a href="#empresa">A Empresa</a></li>
          <li><a href="#diferenciais">Diferenciais</a></li>
          <li><a href="#metodologia">Metodologia</a></li>
          <li><a href="#experiencias">Experiências</a></li>
          <li><a href="#contact">Contato</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <style>
    .fade-text {
      transition: opacity 0.8s ease;
    }

    .fade-out {
      opacity: 0;
    }

    .fade-in {
      opacity: 1;
    }
  </style>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div class="hero-slider">
        <div class="slide active" style="background-image: url('assets/img/banner1.jpg');"></div>
        <div class="slide" style="background-image: url('assets/img/banner2.jpg');"></div>
        <div class="slide" style="background-image: url('assets/img/banner3.jpg');"></div>
      </div>

      <div class="container d-flex flex-column align-items-center text-center">
        <h2 id="hero-title" data-aos="fade-up" data-aos-delay="100">Gestão condominial com experiência e transparência</h2>
        <p id="hero-text" data-aos="fade-up" data-aos-delay="200">
          Administração eficiente, comunicação clara e resultados que valorizam o patrimônio do seu condomínio
        </p>
      </div>
    </section>

  <script>
    const heroMessages = [
      {
        title: "Gestão condominial com experiência e transparência",
        text: "Administração eficiente, comunicação clara e resultados que valorizam o patrimônio do seu condomínio"
      },
      {
        title: "Soluções que geram economia e segurança",
        text: "A CRC atua com planejamento, controle e tecnologia para garantir eficiência em cada detalhe da gestão"
      },
      {
        title: "Mais que administrar, cuidamos de pessoas",
        text: "Gestão humanizada, presença constante e compromisso real com o bem-estar dos condôminos"
      }
    ];

    let currentIndex = 0;
    const titleEl = document.getElementById("hero-title");
    const textEl = document.getElementById("hero-text");

    function fadeText(nextIndex) {
      titleEl.classList.add("fade-out");
      textEl.classList.add("fade-out");

      setTimeout(() => {
        titleEl.textContent = heroMessages[nextIndex].title;
        textEl.textContent = heroMessages[nextIndex].text;

        titleEl.classList.remove("fade-out");
        textEl.classList.remove("fade-out");
      }, 800); 
    }

    setInterval(() => {
      currentIndex = (currentIndex + 1) % heroMessages.length;
      fadeText(currentIndex);
    }, 6000); 
  </script>

<!-- About Section -->
<section id="vantagens" class="about section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Vantagens</h2>
    <p>
      Condomaze é sinônimo de gestão inteligente e sem complicações. <br>
      Com nossa tecnologia de ponta, leve mais transparência e eficiência para a comunicação com seus moradores.
    </p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4 align-items-center">

      <!-- Texto -->
      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <p>Gestão de condomínio sem dor de cabeça.</p>
        <ul>
          <li><i class="bi bi-check2-circle"></i> <span>Organização, clareza e controle.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Fácil de usar, difícil de ficar sem.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Menos burocracia, mais eficiência.</span></li>
        </ul>

        Transforme a gestão do seu condomínio com mais agilidade, organização e transparência. O sistema Condomaze foi pensado para facilitar a rotina do síndico e melhorar a comunicação com os moradores. Com uma plataforma intuitiva e moderna, você reduz o trabalho manual, evita retrabalhos e toma decisões com mais confiança.
      </div>

      <!-- Vídeo ajustado -->
      <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="200">
        <video autoplay muted playsinline loop style="max-width: 100%; height: auto;">
          <source src="video.mp4" type="video/mp4">
          Seu navegador não suporta vídeo.
        </video>
      </div>

    </div>
  </div>
</section><!-- /About Section -->

    <!-- Services Section -->
    <section id="recursos" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Recursos</h2>
        <p>Funções inteligentes para uma gestão comunicativa, organizada e moderna.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Gestão de Atividades</h3>
              </a>
              <p>Mantenha todas as tarefas do condomínio organizadas e sob controle, garantindo que cada atividade seja planejada, executada e acompanhada com facilidade.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-cart-dash"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Gestão de Orçamentos</h3>
              </a>
              <p>Com a Gestão de Orçamentos, você acompanha cada proposta recebida, garantindo que as melhores opções sejam analisadas antes da decisão final.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-building"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Prestadores de Serviço</h3>
              </a>
              <p>Mantenha um cadastro completo e atualizado dos prestadores de serviço, facilitando a contratação e o acompanhamento de cada fornecedor com segurança e organização.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-list-task"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Gestão de Pendências</h3>
              </a>
              <p>A Gestão de Pendências permite ao síndico organizar as demandas em aberto e manter os moradores informados sobre o andamento dos trabalhos.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Procedimentos e Comunicados</h3>
              </a>
              <p>Registre e compartilhe procedimentos essenciais do condomínio, mantendo todos os moradores informados e alinhados.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-speedometer"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Indicador Financeiro</h3>
              </a>
              <p>Permita que moradores entendam facilmente o resumo financeiro, sem precisar se perder em relatórios complexos.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-lg-1">

            <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-box flex-shrink-0"></i>
              <div>
                <h4>Gestão de Encomendas</h4>
                <p>Registre e controle as encomendas do condomínio com segurança e organização. Oferecendo muita comodidade ao morador.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-chat-square-text flex-shrink-0"></i>
              <div>
                <h4>Enquentes</h4>
                <p>Crie e gerencie enquetes personalizadas para ouvir a opinião dos moradores de forma prática e organizada.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-balloon flex-shrink-0"></i>
              <div>
                <h4>Salão de Festas</h4>
                <p>Crie listas de convidados com antecedência e facilite o controle de acesso durante eventos no salão de festas.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-person-check flex-shrink-0"></i>
              <div>
                <h4>Controle de Convidados</h4>
                <p>Inove e ofereça ainda mais autonomia ao morador na hora de receber amigos e familiares.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-p-square flex-shrink-0"></i>
              <div>
                <h4>Estacionamento de Visitantes</h4>
                <p>Controle fácil e rápido de ocupação de vagas destinadas a visitantes dos moradores.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-chat-left-text flex-shrink-0"></i>
              <div>
                <h4>Mural de Sugestões</h4>
                <p>Dê voz aos moradores com um mural anônimo e colaborativo, ajudando a sentir o clima no condomínio.</p>
              </div>
            </div><!-- End Features Item-->

          </div>

          <div class="col-lg-6 order-lg-1">

            <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-shop flex-shrink-0"></i>
              <div>
                <h4>Programa de Parceiros</h4>
                <p>Com nosso programa exclusivo de parcerias com cashback, você pode zerar totalmente sua mensalidade e ainda oferecer aos moradores acesso a descontos especiais com nossos parceiros!</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-cpu flex-shrink-0"></i>
              <div>
                <h4>Integração com IA</h4>
                <p>Ganhe agilidade no dia a dia com a integração da inteligência artificial à sua gestão.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-bar-chart flex-shrink-0"></i>
              <div>
                <h4>Painel Administrativo</h4>
                <p>Visualize todas as informações do condomínio de forma clara e organizada em um dashboard intuitivo e fácil de usar.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-book flex-shrink-0"></i>
              <div>
                <h4>Central de Aprendizado</h4>
                <p>Vídeos tutoriais completos disponíveis no sistema para facilitar o uso e tirar suas dúvidas sempre que precisar.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-basket flex-shrink-0"></i>
              <div>
                <h4>Feira do Condomínio</h4>
                <p>Plataforma exclusiva que conecta vizinhos para a compra e venda de itens usados.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-chat-dots flex-shrink-0"></i>
              <div>
                <h4>Sua voz nos ajuda a melhorar</h4>
                <p>Tem uma sugestão ou ideia de melhoria? Envie para nós, com certeza vamos avaliar.</p>
              </div>
            </div><!-- End Features Item-->

          </div>

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- About Section -->
    <section id="vantagens" class="about section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Integração Inteligente</h2>
        <p>
          Revolucione a experiência em condomínio com a Alexa!<br>Agora, o sistema Condomaze se integra diretamente com a assistente de voz da Amazon, trazendo mais conveniência e agilidade para o seu dia a dia.
        </p>
      </div><!-- End Section Title -->
      
      <div class="container">
        <div class="row gy-4 align-items-center">
      
          <!-- Texto -->
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>Com simples comandos de voz, você pode:</p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span><strong>Consultar encomendas:</strong> Pergunte se alguma encomenda chegou para você e evite idas desnecessárias à portaria.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span><strong>Verificar visitantes:</strong> Saiba quem está cadastrado para te visitar, garantindo a segurança e o controle de acesso.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span><strong>Saber sobre a inadimplência:</strong> Mantenha-se informado sobre o percentual de inadimplência do seu condomínio.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span><strong>Consultar o fundo de reserva:</strong> Tenha acesso rápido ao valor atualizado do fundo de reserva.</span></li>
            </ul>
      
            Com a integração entre Condomaze e Alexa, as informações mais importantes do seu condomínio estão sempre a uma pergunta de distância.
          </div>
      
          <!-- Vídeo ajustado -->
          <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/alexa.png" alt="Alexa" style="max-width: 60%; height: auto;">
          </div>
      
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/cta-bg2.jpg" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Agende uma demonstração</h3>
            <p>
             Descubra como o nosso sistema pode transformar a gestão do seu condomínio!<br>
             Você verá na prática como funciona toda a solução Condomaze.<br>
             Tire suas dúvidas ao vivo com nossa equipe e veja como é fácil modernizar a comunicação e o dia a dia do seu condomínio com tecnologia de verdade.
              <br><br>
             <strong><span style="font-size: 24px;">É rápido, gratuito e sem compromisso.</span></strong>
            </p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#contact">Agendar</a>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sua gestão merece tecnologia de ponta.</h2>
        <p> Com ferramentas modernas e automações inteligentes, você ganha mais controle, organização e tempo para focar no que realmente importa: a tranquilidade do seu condomínio.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <article>

              <div class="post-img">
                <img src="assets/img/sys1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Condomínio Parque Das Hortênsias</p>

              <h2 class="title">
                <a href="#">O suporte técnico é um diferencial, sempre ágil e disponível para solucionar qualquer dúvida ou problema.</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/michelle.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Michelle Silva</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Dez 1, 2024</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article>

              <div class="post-img">
                <img src="assets/img/sys2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Condomínio Dom Rafaele</p>

              <h2 class="title">
                <a href="#">Era tanta planilha e papel que eu me perdia! Agora tá tudo no sistema e a minha vida ficou bem mais fácil.</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Melissa Dias</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2024</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="assets/img/sys3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Residencial Morada dos Ipês</p>

              <h2 class="title">
                <a href="#">Já testei várias ferramentas, mas essa foi a única que realmente resolveu minha rotina como síndico.</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Antônio Lima</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Mai 02, 2025</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>

    </section><!-- /Recent Posts Section -->


    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Planos</h2>
        <p>Planos acessíveis, sem complicação e com tudo o que você precisa</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Essencial</h3>
              <ul>                          
                <li class="na">IA Integrada</li>
                <!-- Gestão Operacional -->
                <li>Gestão de Atividades</li>
                <li>Gestão de Orçamentos</li>
                <li>Gestão de Fornecedores</li>
                <li>Gestão de Ordens de Serviço</li>
                <li>Gestão de Funcionários</li>
                <li>Max. 3 Funcionários</li> 
                <li>Max. 50 Usuários Cadastrados</li>             
                <!-- Comunicação e Documentos -->
                <li>Sistema de Enquetes</li>
                <li>Comunicados e Procedimentos</li>
                <li class="na">Indicadores Financeiros</li>
                <li class="na">Gestão de Pendências</li>
                <!-- Controle de Acessos e Logística -->
                <li class="na">Controle de Visitantes</li>
                <li class="na">Controle de Encomendas</li>
                <!-- Dominioe e-mail -->
                <li class="na">Registro de domínio .br</li>
                <li class="na">Max. 2 caixas de E-mail</li>              
                <!-- Benefícios e Suporte -->
                <li>Contrato de 1(um) ano</li>
                <li>Programa de Parcerias</li>
                <li>Suporte via E-mail</li>
                <li>Suporte via WhatsApp</li>
                <li class="na">Suporte Prioritário</li>
              </ul>
              <div class="btn-wrap">
                <a href="#contact" class="btn-buy">Fale com a gente!</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item">
              <h3>Avançado</h3>
              <!--<h4><sup>R$</sup>000,00<span> / Mês</span></h4> -->
              <ul>                          
                <li class="na">IA Integrada</li>                
                <!-- Gestão Operacional -->
                <li>Gestão de Atividades</li>
                <li>Gestão de Orçamentos</li>
                <li>Gestão de Fornecedores</li>
                <li>Gestão de Ordens de Serviço</li>
                <li>Gestão de Funcionários</li>
                <li>Max. 4 Funcionários</li> 
                <li>Max. 100 Usuários Cadastrados</li>             
                <!-- Comunicação e Documentos -->
                <li>Sistema de Enquetes</li>
                <li>Comunicados e Procedimentos</li>
                <li>Indicadores Financeiros</li>
                <li class="na">Gestão de Pendências</li>
                <!-- Controle de Acessos e Logística -->
                <li class="na">Controle de Visitantes</li>
                <li class="na">Controle de Encomendas</li>
                <!-- Dominioe e-mail -->
                <li class="na">Registro de domínio .br</li>
                <li class="na">Max. 2 caixas de E-mail</li>              
                <!-- Benefícios e Suporte -->
                <li>Contrato de 1(um) ano</li>
                <li>Programa de Parcerias</li>
                <li>Suporte via E-mail</li>
                <li>Suporte via WhatsApp</li>
                <li class="na">Suporte Prioritário</li>
              </ul>
              <div class="btn-wrap">
                <a href="#contact" class="btn-buy">Fale com a gente!</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item recommended">
              <span class="recommended-badge">Recomendado</span>
              <h3>Completo</h3>
              <ul>                          
                <li class="na">IA Integrada</li>
                <!-- Gestão Operacional -->
                <li>Gestão de Atividades</li>
                <li>Gestão de Orçamentos</li>
                <li>Gestão de Fornecedores</li>
                <li>Gestão de Ordens de Serviço</li>
                <li>Gestão de Funcionários</li>
                <li>Max. 5 Funcionários</li> 
                <li>Max. 200 Usuários Cadastrados</li>             
                <!-- Comunicação e Documentos -->
                <li>Sistema de Enquetes</li>
                <li>Comunicados e Procedimentos</li>
                <li>Indicadores Financeiros</li>
                <li>Gestão de Pendências</li>
                <!-- Controle de Acessos e Logística -->
                <li>Controle de Visitantes</li>
                <li>Controle de Encomendas</li>
                <!-- Dominioe e-mail -->
                <li class="na">Registro de domínio .br</li>
                <li class="na">Max. 2 caixas de E-mail</li>              
                <!-- Benefícios e Suporte -->
                <li>Contrato de 1(um) ano</li>
                <li>Programa de Parcerias (cashback)</li>
                <li>Suporte via E-mail</li>
                <li>Suporte via WhatsApp</li>
                <li>Suporte Prioritário</li>
              </ul>
              <div class="btn-wrap">
                <a href="#contact" class="btn-buy">Fale com a gente!</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Master IA</h3>
              <ul>                          
                <li>IA Integrada</li>                
                <!-- Gestão Operacional -->
                <li>Gestão de Atividades</li>
                <li>Gestão de Orçamentos</li>
                <li>Gestão de Fornecedores</li>
                <li>Gestão de Ordens de Serviço</li>
                <li>Gestão de Funcionários</li>
                <li>Max. 10 Funcionários</li> 
                <li>Max. 500 Usuários Cadastrados</li>             
                <!-- Comunicação e Documentos -->
                <li>Sistema de Enquetes</li>
                <li>Comunicados e Procedimentos</li>
                <li>Indicadores Financeiros</li>
                <li>Gestão de Pendências</li>
                <!-- Controle de Acessos e Logística -->
                <li>Controle de Visitantes</li>
                <li>Controle de Encomendas</li>
                <!-- Dominioe e-mail -->
                <li>Registro de domínio .br</li>
                <li>Max. 2 caixas de E-mail</li>              
                <!-- Benefícios e Suporte -->
                <li>Contrato de 1(um) ano</li>
                <li>Programa de Parcerias (cashback)</li>
                <li>Suporte via E-mail</li>
                <li>Suporte via WhatsApp</li>
                <li>Suporte Prioritário</li>
              </ul>
              <div class="btn-wrap">
                <a href="#contact" class="btn-buy">Fale com a gente!</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-12 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Perguntas </span><strong>Frequentes</strong></h3>
              <p>
                Tem dúvidas? Aqui estão as respostas para as perguntas mais comuns sobre o sistema Condomaze.
Se não encontrar o que precisa, <a href="#contact">fale com a gente</a>, estamos sempre prontos para ajudar!
              </p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>É possível receber nota fiscal e pagar por transferência bancária?</h3>
                <div class="faq-content">
                  <p>Sim! Emitimos nota fiscal e também oferecemos a opção de pagamento por cartão de crédito ou transferência bancária. Para isso, entre em contato com a nossa equipe pelo e-mail suporte@codemaze.com.br e teremos prazer em ajudar.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Síndicos profissionais têm condições especiais?</h3>
                <div class="faq-content">
                  <p>Com certeza! Ao contratar o sistema para 3 ou mais condomínios, você garante descontos exclusivos. Fale com a nossa equipe pelo e-mail suporte@codemaze.com.br ou preencha o formulário abaixo e agende uma reunião com um de nossos representantes.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Posso cancelar a qualquer momento?</h3>
                <div class="faq-content">
                  <p>Para cancelar sua assinatura, basta acessar a sua área de assinaturas e realizar o cancelamento diretamente por lá.
Nos planos Completo e Master IA, é necessário entrar em contato com a equipe da Codemaze para concluir o cancelamento.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Existe algum custo para a implantação?</h3>
                <div class="faq-content">
                  <p>Depende! A cobrança pela implantação pode variar (em muitos casos nem existir). Caso seja necessária a migração de dados, entre em contato conosco pelo e-mail suporte@codemaze.com.br para que possamos avaliar seu caso detalhadamente.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

                <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Como funciona o programa de parceria (cashback)?</h3>
                <div class="faq-content">
                  <p>Buscamos estabelecimentos interessados em anunciar no sistema Condomaze, oferecendo descontos exclusivos aos moradores. Para parceiros que aderirem, 5% do valor do anúncio é convertido em descontos na mensalidade do sistema. 
                    A modalidade de cashback só está disponível nos planos Completo e Master IA.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Sou morador e tenho um negócio. Posso anunciar na área de parceiros do sistema?</h3>
                <div class="faq-content">
                  <p>Com certeza! Moradores empreendedores têm 75% de desconto na contratação de 1(um) anúncio no formato Tarja Simples.
O investimento é simbólico e, nesse caso, não gera cashback para o condomínio, mas é uma excelente forma de divulgar seu negócio diretamente para a vizinhança! </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Indiquei um parceiro para anunciar. Tenho algum benefício com isso?</h3>
                <div class="faq-content">
                  <p>Com certeza! Toda vez que um anunciante parceiro for indicado por você (morador ou síndico), 5% do valor do anúncio será convertido em cashback para o condomínio, mensalmente, enquanto o parceiro continuar ativo na plataforma.
                    Lembrando que a modalidade de cashback só está disponível nos planos Completo e Master IA.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>


        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Fale com a gente!</h2>
        <p>Converse com a gente e leve o sistema Condomaze para o seu condomínio.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Endereço</h3>
                <p>Hortolândia/SP</p>
              </div>
            </div><!-- End Info Item -->
            <br>
            <a href="<?= $linkWhatsapp ?>" target="_blank">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              
              <i class="bi bi-whatsapp flex-shrink-0" style="color: #25D366;"></i>
              <div>
                <h3>Telefone</h3>
                <p>19 99250-2546 </p>
              </div>
              
            </div><!-- End Info Item -->
            </a>
            <br>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>E-mail</h3>
                <p>suporte@codemaze.com.br</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="process_form.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="nome" id="nome" class="form-control" placeholder="Seu Nome Completo" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Seu E-mail" required="">
                </div>

                <!-- Campo com a máscara aplicada -->
                <div class="col-md-6">
                  <input 
                    type="text" 
                    class="form-control" 
                    name="telefone" 
                    id="telefone" 
                    placeholder="Seu Telefone" 
                    required>
                </div>

                <!-- Script para aplicar a máscara -->
                <script>
                  Inputmask({
                    mask: ['(99) 9999-9999', '(99) 99999-9999'],
                    keepStatic: true,
                    showMaskOnHover: false
                  }).mask('#telefone');
                </script>

                <div class="col-md-6">
                  <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" id="mensagem" name="mensagem" rows="6" placeholder="Mensagem" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Carregando</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Sua mensagens foi enviada. Obrigado!</div>

                  <button type="submit">Enviar Mensagem</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <img src="assets/img/logo_full_new_600.png" alt="Logo" style="width: 200px; height: auto;">
      <p>Inovação ao Alcance do Síndico</p>
      <br>
      <p>Horário de Atendimento: Segunda á Sexta dás 09h ás 17h</p>
        <div class="social-links d-flex justify-content-center">
        <a href="https://www.instagram.com/agenciacodemaze" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="https://br.linkedin.com/company/agencia-codemaze" target="_blank"><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">CRC Soluções Condominiais</strong> <span>Todos os direitos reservados</span>
        </div>
        <div class="credits">
          Desenvolvido por <a href="https://codemaze.com.br" target="_blank">Codemaze</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

<script>
  const slides = document.querySelectorAll(".slide");
  let current = 0;

  setInterval(() => {
    slides[current].classList.remove("active");
    current = (current + 1) % slides.length;
    slides[current].classList.add("active");
  }, 5000); // troca a cada 5 segundos
</script>

</body>

</html>