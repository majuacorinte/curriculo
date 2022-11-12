<?php
  session_start();
  if(empty($_SESSION['autorizado'])||($_SESSION['autorizado']!=true)){
    header("Location: login.html");
    die();
  }
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Perfil de <?php echo $_SESSION["nomeUsuario"];?></title>
    <link rel="stylesheet" href="../css/stylegeral.css" media="screen">
    <link rel="stylesheet" href="../css/Perfil.css" media="screen">
    <link rel="icon" href="../images/foguete.png" type="image/x-icon"/>
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/java.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo.png"
}</script>
    <meta name="theme-color" content="#3fb7fe">
    <meta property="og:title" content="Perfil">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="pt"><header class="u-clearfix u-header u-header" id="sec-b4c8"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
          <img src="../images/logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-grey-90 u-text-hover-palette-2-base" href="perfilUsu.html" style="padding: 10px;">Perfil</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item">
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-grey-90 u-text-hover-palette-2-base" href="tudo-sobre.html" style="padding: 10px;">Área de estudo</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="tudo-sobre.php">Tudo sobre currículo</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="tutorial.php" target="_blank">Tutorial para fazer download</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-grey-90 u-text-hover-palette-2-base" href="sobreperfil.php" style="padding: 10px;">Sobre</a>
</li><li class="u-nav-item"><a href="../php/logout.php" class="u-button-style u-nav-link u-text-active-palette-3-base u-text-grey-90 u-text-hover-palette-2-base" style="padding: 10px;">Sair</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="perfilUsu.html">Perfil</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-5"><li class="u-nav-item"><a class="u-button-style u-nav-link" target="_blank">Minhas informações</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="tudo-sobre.php">Área de estudo</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="tudo-sobre.html">Tudo sobre currículo</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="tutorial.html" target="_blank">Tutorial para fazer download</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="sobreperfil.php">Sobre</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../php/logout.php" style="cursor: pointer;">Sair</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-image u-shading u-section-1" id="carousel_96cd" data-image-width="1632" data-image-height="1080">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        
        <div class="u-align-left u-container-style u-group u-radius-20 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h3 class="u-text u-text-2">olá, <?php echo $_SESSION["nomeUsuario"];?></h3>
            <h2 class="u-custom-font u-font-raleway u-text u-text-palette-1-base u-text-3"> Seja bem-vindo(a)!</h2>
            <p class="u-custom-font u-font-pt-sans u-text u-text-default u-text-4">Clique no botão abaixo para descobrir qual o currículo ideal para você.&nbsp;</p>
            <a href="tudo-sobre.php" class="u-active-palette-2-light-2 u-btn u-btn-round u-button-style u-gradient u-hover-palette-2-light-2 u-none u-radius-50 u-text-active-palette-4-light-2 u-text-body-alt-color u-text-hover-palette-4-light-2 u-btn-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Tudo sobre<br>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-white u-section-2" id="carousel_2533">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h3 class="u-text u-text-default u-text-1"> Tipos de currículo para download</h3>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-custom-item u-list-item u-palette-1-light-1 u-radius-20 u-repeater-item u-shape-round u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <p class="u-text u-text-body-color u-text-default u-text-2"> Esse modelo é a descrição escrita dos dados pessoais, competências, formação, experiências etc. É o mais recorrente nos processos seletivos.</p>
                <a href="../files/CurriculoSimplesParaInserir.docx" class="u-btn u-btn-round u-button-style u-custom-item u-file-link u-palette-1-base u-radius-50 u-btn-1">Simples</a>
              </div>
            </div>
            <div class="u-align-left u-container-style u-custom-item u-list-item u-palette-2-light-1 u-radius-20 u-repeater-item u-shape-round u-video-cover">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <p class="u-text u-text-body-color u-text-default u-text-3"> Esse modelo costuma não ser bem-visto pelos empregadores. No entanto, é preciso saber quando a foto é ou não importante para o processo seletivo em questão.</p>
                <a href="../files/CartaDeApresentacaoParaInserirComFoto.docx" class="u-border-none u-btn u-btn-round u-button-style u-custom-item u-file-link u-palette-2-base u-radius-50 u-btn-2">Com foto</a>
              </div>
            </div>
            <div class="u-align-left u-container-style u-custom-item u-list-item u-palette-4-light-1 u-radius-20 u-repeater-item u-shape-round u-video-cover">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <p class="u-text u-text-body-color u-text-default u-text-4"> Esse modelo prioriza a organização da trajetória profissional de acordo com as datas dos acontecimentos. Adotado pelas pessoas que desejam ressaltar a experiência profissional.</p>
                <a href="../files/CurriculoCronologicoParaInserir.docx" class="u-border-none u-btn u-btn-round u-button-style u-custom-item u-file-link u-palette-4-base u-radius-50 u-btn-3">Cronológico</a>
              </div>
            </div>
            <div class="u-align-left u-container-style u-custom-item u-list-item u-palette-3-light-2 u-radius-20 u-repeater-item u-shape-round u-video-cover">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                <p class="u-text u-text-body-color u-text-default u-text-5"> Esse modelo dá destaque às competências relacionadas à função desejada. Nesse caso, os conhecimentos e as habilidades tomam a&nbsp;frente, e as experiências e as qualificações vêm depois, com o objetivo de reforçar os atributos positivos.</p>
                <a href="../files/CurriculoTematicoParaInserir.docx" class="u-border-none u-btn u-btn-round u-button-style u-custom-item u-file-link u-palette-3-base u-radius-50 u-btn-4">Temático</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-white u-section-3" id="carousel_af89">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h3 class="u-text u-text-default u-text-1"> Modelos de currículo para download</h3>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-custom-item u-list-item u-palette-1-light-1 u-radius-20 u-repeater-item u-shape-round u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <p class="u-text u-text-body-color u-text-default u-text-2"> Esse modelo é a descrição escrita dos dados pessoais, competências, formação, experiências etc. É o mais recorrente nos processos seletivos.</p>
                <a href="../files/CurriculoComercio.docx" class="u-btn u-btn-round u-button-style u-custom-item u-file-link u-palette-1-base u-radius-50 u-btn-1">Comércio</a>
              </div>
            </div>
            <div class="u-align-left u-container-style u-custom-item u-list-item u-palette-2-light-1 u-radius-20 u-repeater-item u-shape-round u-video-cover">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <p class="u-text u-text-body-color u-text-default u-text-3"> Esse modelo costuma não ser bem-visto pelos empregadores. No entanto, é preciso saber quando a foto é ou não importante para o processo seletivo em questão.</p>
                <a href="../files/CurriculoCabeleireiroa.docx" class="u-border-none u-btn u-btn-round u-button-style u-custom-item u-file-link u-palette-2-base u-radius-50 u-btn-2">Cabeleireiro(a)</a>
              </div>
            </div>
            <div class="u-align-left u-container-style u-custom-item u-list-item u-palette-4-light-1 u-radius-20 u-repeater-item u-shape-round u-video-cover">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <p class="u-text u-text-body-color u-text-default u-text-4"> Esse modelo prioriza a organização da trajetória profissional de acordo com as datas dos acontecimentos. Adotado pelas pessoas que desejam ressaltar a experiência profissional.</p>
                <a href="../files/CurriculoJovemAprendiz.docx" class="u-border-none u-btn u-btn-round u-button-style u-custom-item u-file-link u-palette-4-base u-radius-50 u-btn-3">Jovem Aprendiz</a>
              </div>
            </div>
            <div class="u-align-left u-container-style u-custom-item u-list-item u-palette-3-light-2 u-radius-20 u-repeater-item u-shape-round u-video-cover">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                <p class="u-text u-text-body-color u-text-default u-text-5"> A carta de apresentação é um documento anexado ao&nbsp;currículo do candidato&nbsp;que busca uma nova oportunidade de trabalho. Ela, então, funciona como um instrumento para introduzir o candidato aos recrutadores.</p>
                <a href="../files/CartaDeApresentacaoParaInserir.docx" class="u-border-none u-btn u-btn-round u-button-style u-custom-item u-file-link u-palette-3-base u-radius-50 u-btn-4">Carta de apresentação</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-4" id="sec-dc0a">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Entre em contato conosco</h1>
        <div class="u-form u-form-1">
          <form action="../php/mensagem.php" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 10px" source="email" name="form">
            <div class="u-form-group u-form-name u-label-none">
              <label for="name-3b9a" class="u-label">Nome</label>
              <input type="text" placeholder="Insira seu nome" name="nome" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-1" required="">
            </div>
            <div class="u-form-email u-form-group u-label-none">
              <label for="email-3b9a" class="u-label">Email</label>
              <input type="email" placeholder="Insira seu email de contato" name="email" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-2" required="">
            </div>
            <div class="u-form-group u-form-message u-label-none">
              <label for="message-3b9a" class="u-label">Mensagem</label>
              <textarea placeholder="Digite sua mensagem" rows="4" cols="50" name="txt" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-3" required=""></textarea>
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="#" class="u-border-2 u-border-black u-btn u-btn-rectangle u-btn-submit u-button-style u-none u-btn-1">enviar<br>
              </a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Mensagem enviada com sucesso! </div>
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="3eca208ffe1100548f1334ccf5752e1e">

          </form>
          <form method="POST" action="../php/lista.php">
            <p>Clique no botão abaixo para ter acesso as mensagens de outras pessoas</br> Apenas usuários cadastrados tem acesso a essa função </p>
          <input type="hidden" name="operacao" value="mostrar">
                <div class="form-group">
                  <button type="submit" style="background-color:transparent; border-color:black; cursor:pointer; padding:10px;">Mostrar mensagens</button>
                </div> 
          </form>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-palette-3-base u-footer" id="sec-5124"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Feito por Maria Júlia Acorinte</p>
      </div></footer>
  
</body></html>