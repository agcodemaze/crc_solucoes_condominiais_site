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
<section id="empresa" class="about section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2> A Empresa</h2>
    <p>
    Gestão condominial profissional que une experiência, transparência e resultados.
    </p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4 align-items-center">

      <!-- Texto -->
      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <p>Sindicatura profissional que vai além da administração tradicional, entregando soluções eficientes e uma atuação presente, segura e comprometida com o bem-estar dos condôminos.</p>
        <ul>
          <li><i class="bi bi-check2-circle"></i> <span>Entrega 
de
 resultados concretos, segurança e eficiência,
 sempre alinhando o condomínio às melhores
 práticas administrativas, técnicas e legais do
 mercado.</span></li><br>
          <li><i class="bi bi-check2-circle"></i> <span>Formado em Direito pela Faculdade
 Anhanguera de Campinas (2021), com cursos
 na área condominial como manutenção e
 conservação de elevadores pelo SECISP e
 especialização em sindicatura profissional pelo
 ICCOND.</span></li><br>
          <li><i class="bi bi-check2-circle"></i> <span>Desde 2017 atuando na implantação e gestão
 de condomínios, com foco em soluções
 rápidas, racionais e inovadoras que garantem
 segurança, economia e valorização patrimonial.</span></li>
        </ul>

        <div style="margin-top:20px; padding-left:6px; border-left:3px solid #0d6efd; font-style:italic; line-height:1.4;">
          <strong style="font-size:1.1rem; font-weight:600;">Clériston Ramon Cruz</strong><br>
          <span style="font-size:0.95rem; color:#555;">Diretor Executivo • Síndico Profissional</span>
        </div>
 
 

      </div>

          <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/sindico_1.jpg" alt="Alexa" style="max-width: 100%; height: auto;">
          </div>

      <!-- Vídeo ajustado -->
       <!--
      <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="200">
        <video autoplay muted playsinline loop style="max-width: 100%; height: auto;">
          <source src="video.mp4" type="video/mp4">
          Seu navegador não suporta vídeo.
        </video>
      </div>
      -->

    </div>
  </div>
</section><!-- /About Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="stats section dark-background">

      <img src="assets/img/cta-bg2.jpg" alt="">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="subheading">
          <h3>Histórias que Transformam</h3>
          <p>Atuamos como síndicos profissionais há mais de 7 anos, com 100% de reeleição.</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1445" data-purecounter-duration="1" class="purecounter"></span>
              <p>Moradores<br>Impactados</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1" class="purecounter"></span>
              <p>Condomínios<br>Geridos</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p>Cidades<br>Atendidas</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

    </section><!-- /Call To Action Section -->

    <!-- Services Section -->
    <section id="diferenciais" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Diferenciais</h2>
        <p>Cada condomínio possui suas particularidades,
 desafios e expectativas. Por isso, nossa atuação
 é pautada em um modelo de gestão que une
 conhecimento técnico, experiência prática e
 proximidade com os condôminos.

 Mais do que administrar, nosso compromisso
 é oferecer uma gestão transparente, eficiente
 e personalizada, capaz de promover
 segurança, valorização patrimonial e harmonia
 entre todos os envolvidos</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-award"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Formação e Experiência</h3>
              </a>
              <p> Síndico formado em Direito, atuando
 desde 2017 em condomínios novos e
 consolidados. </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bar-chart"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Gestão Transparente</h3>
              </a>
              <p> Processos claros, comunicação aberta e
 uso de tecnologia para maior eficiência. </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-gear"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Atuação Técnica</h3>
              </a>
              <p>Capacitação em manutenção de
 elevadores e sistemas essenciais,
 prevenindo riscos e custos. </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-people"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Proximidade com Condôminos</h3>
              </a>
              <p>Atendimento ágil, cordial e soluções
 práticas para demandas rotineiras e
 extraordinárias. </p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Valorização Patrimonial</h3>
              </a>
              <p>Foco na manutenção e melhoria dos
 ativos do condomínio.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-journal-check"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Segurança Jurídica</h3>
              </a>
              <p>Garantia de que todas as decisões, contratos, documentos e procedimentos do condomínio estejam alinhados às normas legais e boas práticas jurídicas.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="metodologia" class="features section">

          <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Metodologia de
 trabalho</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-lg-1">

            <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-people flex-shrink-0"></i>
              <div>
                <h4>Relação com o condômino</h4>
                <p> Independente das ações estritamente administrativas, temos como norte alguns valores de
 cunho pessoal, utilizando os recursos no foco do cliente, entendendo seus problemas,
 vivenciando seu dia-a-dia, estabelecendo relações harmoniosas, sem, contudo, se esquecer
 do profissionalismo.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-graph-up-arrow flex-shrink-0"></i>
              <div>
                <h4>Gestão financeira</h4>
                <p>A gestão financeira inclui a análise do cenário econômico, garantindo a correta aplicação dos recursos. Envolve o acompanhamento das receitas e despesas, identificando desperdícios e oportunidades de economia, além da revisão de contratos para assegurar o melhor custo-benefício e o uso eficiente dos recursos do condomínio.</p>
              </div>
            </div><!-- End Features Item-->

          </div>

          <div class="col-lg-6 order-lg-1">

            <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-clipboard-data flex-shrink-0"></i>
              <div>
                <h4>Prestação de contas</h4>
                <p>A prestação de contas é realizada mensalmente, com reunião junto ao Conselho Consultivo para apresentar as atividades executadas, pendências e decisões do condomínio. Também é enviado um relatório completo com as ações realizadas e o extrato bancário do período, garantindo total transparência.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-person-lines-fill flex-shrink-0"></i>
              <div>
                <h4>Gestão de pessoas</h4>
                <p>A gestão de pessoas envolve a aplicação do Regulamento Interno, com advertências e multas quando necessário, além da mediação de conflitos entre condôminos. Também inclui o controle da inadimplência em parceria com a administradora, buscando acordos extrajudiciais, e a conferência das rotinas do zelador para garantir o bom funcionamento do condomínio.</p>
              </div>
            </div><!-- End Features Item-->

          </div>

        </div>

      </div>

    </section><!-- /Features Section -->


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