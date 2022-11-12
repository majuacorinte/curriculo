<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Perfil de <?php echo $_SESSION["nomeUsuario"];?></title>
    <link rel="stylesheet" href="../css/stylegeral.css" media="screen">
<link rel="stylesheet" href="../css/tudo-sobre.css" media="screen">
<link rel="icon" href="../images/foguete.png" type="image/x-icon"/>
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/java.js" defer=""></script>
    <meta name="generator" content="">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo.png"
}</script>
    <meta name="theme-color" content="#3fb7fe">
    <meta property="og:title" content="tudo sobre">
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
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-grey-90 u-text-hover-palette-2-base" href="perfilUsu.php" style="padding: 10px;">Perfil</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item">
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-grey-90 u-text-hover-palette-2-base" href="tudo-sobre.php" style="padding: 10px;">Área de estudo</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="tudo-sobre.php">Tudo sobre currículo</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="tutorial.php" target="_blank">Tutorial para fazer download</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-grey-90 u-text-hover-palette-2-base" href="sobreperfil.php" style="padding: 10px;">Sobre</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-grey-90 u-text-hover-palette-2-base" style="padding: 10px;">Sair</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="perfilUsu.php">Perfil</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-5"><li class="u-nav-item"><a class="u-button-style u-nav-link" target="_blank">Minhas informações</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="tudo-sobre.php">Área de estudo</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="tudo-sobre.php">Tudo sobre currículo</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="tutorial.php" target="_blank">Tutorial para fazer download</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="sobreperfil.php">Sobre</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Sair</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="carousel_7f5c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1"> História</h2>
        <div class="u-align-center u-container-style u-grey-5 u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-2">1950</h2>
            <p class="u-text u-text-default u-text-3"><b>A partir de 1950 os candidatos começaram a levar currículos nas empresas durante as entrevistas.</b>
            </p>
          </div>
        </div>
        <div class="u-align-center u-container-style u-group u-palette-1-base u-group-2">
          <div class="u-container-layout u-valign-middle u-container-layout-2">
            <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-4">1482</h2>
            <p class="u-text u-text-default u-text-5"><b>A prática de registrar as realizações pessoais existe há cerca de 3.500 anos, no Egito Antigo. No entanto, Leonardo da Vinci criou o primeiro currículo profissional em 1482.</b>&nbsp;
            </p>
          </div>
        </div>
        <div class="u-align-center u-container-style u-grey-5 u-group u-group-3">
          <div class="u-container-layout u-valign-middle u-container-layout-3">
            <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-6">2022</h2>
            <p class="u-text u-text-default u-text-7"> Pode ser encontrado abreviado como CV e ainda como currículo. "Atualmente, há programas que permitem a elaboração de currículo, o qual é entregue diretamente ao responsável via on-line. No entanto, o digitado e impresso ainda é o mais utilizado, mesmo que enviado por e-mail.<br>
            </p>
          </div>
        </div>
        <div class="u-align-center u-container-style u-grey-5 u-group u-group-4">
          <div class="u-container-layout u-valign-middle u-container-layout-4">
            <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-8">1984</h2>
            <p class="u-text u-text-default u-text-9"> E<b>m 1984 é publicado o primeiro guia para escrever currículos.</b>&nbsp;
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-section-2" id="carousel_a41c">
      <div class="u-expanded-width u-opacity u-opacity-55 u-palette-2-base u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-36 u-white u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <h4 class="u-text u-text-default u-text-palette-2-base u-text-1"> O que é um currículo?<br>
                </h4>
                <p class="u-custom-font u-heading-font u-text u-text-2">O termo currículo significa "carreira da vida". Hoje em dia, a palavra currículo permite referir-se ao conjunto de experiências de um sujeito, entre elas as laborais (profissionais), as educacionais (formação) e as vivenciais. O currículo tornou-se um requisito incontestável na hora de se apresentar em busca de um emprego.</p>
                <div class="u-border-1 u-border-grey-25 u-line u-line-horizontal u-line-1"></div>
                <div class="u-list u-list-1">
                  <div class="u-repeater u-repeater-1">
                    <div class="u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-icon u-icon-circle u-palette-3-light-3 u-text-palette-2-base u-icon-1">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 54 54" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c709"></use></svg>
            <svg id="svg-c709" x="0px" y="0px" viewBox="0 0 54 54" style="enable-background:new 0 0 54 54;" class="u-svg-content"><g><path d="M27,8c-9.374,0-17,7.626-17,17c0,7.112,4.391,13.412,11,15.9V50c0,0.553,0.447,1,1,1h1v2c0,0.553,0.447,1,1,1h6
		c0.553,0,1-0.447,1-1v-2h1c0.553,0,1-0.447,1-1v-9.1c6.609-2.488,11-8.788,11-15.9C44,15.626,36.374,8,27,8z M30,49
		c-0.553,0-1,0.447-1,1v2h-4v-2c0-0.553-0.447-1-1-1h-1v-5h8v5H30z M31.688,39.242C31.277,39.377,31,39.761,31,40.192V42h-8v-1.808
		c0-0.432-0.277-0.815-0.688-0.95C16.145,37.214,12,31.49,12,25c0-8.271,6.729-15,15-15s15,6.729,15,15
		C42,31.49,37.855,37.214,31.688,39.242z"></path><path d="M27,6c0.553,0,1-0.447,1-1V1c0-0.553-0.447-1-1-1s-1,0.447-1,1v4C26,5.553,26.447,6,27,6z"></path><path d="M51,24h-4c-0.553,0-1,0.447-1,1s0.447,1,1,1h4c0.553,0,1-0.447,1-1S51.553,24,51,24z"></path><path d="M7,24H3c-0.553,0-1,0.447-1,1s0.447,1,1,1h4c0.553,0,1-0.447,1-1S7.553,24,7,24z"></path><path d="M43.264,7.322l-2.828,2.828c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293
		s0.512-0.098,0.707-0.293l2.828-2.828c0.391-0.391,0.391-1.023,0-1.414S43.654,6.932,43.264,7.322z"></path><path d="M12.15,38.436l-2.828,2.828c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293
		s0.512-0.098,0.707-0.293l2.828-2.828c0.391-0.391,0.391-1.023,0-1.414S12.541,38.045,12.15,38.436z"></path><path d="M41.85,38.436c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l2.828,2.828c0.195,0.195,0.451,0.293,0.707,0.293
		s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L41.85,38.436z"></path><path d="M12.15,11.564c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414l-2.828-2.828
		c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414L12.15,11.564z"></path><path d="M27,13c-6.617,0-12,5.383-12,12c0,0.553,0.447,1,1,1s1-0.447,1-1c0-5.514,4.486-10,10-10c0.553,0,1-0.447,1-1
		S27.553,13,27,13z"></path>
</g></svg>
          </span>
                        <p class="u-text u-text-3"> No curriculum vitae não se registram apenas as experiências de trabalho em empregos fixos, mas estudantes também podem listar nesse documento os projetos acadêmicos em que participaram, por exemplo.</p>
                      </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-file-icon u-icon u-icon-circle u-palette-3-light-3 u-text-palette-2-base u-icon-2"><img src="../images/digital.png" alt=""></span>
                        <p class="u-text u-text-4"> Pode-dizer que cada pessoa tem o seu próprio estilo na hora de elaborar o seu currículo.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-left-cell u-size-24 u-image-1" data-image-width="853" data-image-height="1280">
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-3" id="sec-f2ce">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-1">Carta de apresentação</h3>
        <p class="u-text u-text-2">A <span style="font-weight: 700;">carta de apresentação</span> é um documento anexado ao<span style="font-weight: 700;">&nbsp;currículo</span> do candidato&nbsp;que busca uma nova oportunidade de trabalho. Ela, então, funciona como um instrumento para introduzir o candidato aos recrutadores. Uma carta de apresentação perfeita&nbsp;deve apresentar<span style="font-weight: 700;"> linguagem formal</span> e não conter erros de português, além de ser escrita de maneira clara e objetiva. Também é importante ser sucinto: textos muitos longos podem prejudicar a compreensão do material. Sua função é <span style="font-weight: 700;">destacar as realizações profissionais e evidenciar os motivos que fazem você ser o candidato ideal para a vaga pretendida</span>.&nbsp;É um erro comum as pessoas praticamente repetirem o conteúdo de currículo na carta, de maneira resumida.<br>A redação de uma carta de apresentação interessante reúne o que motiva você a entrar naquela empresa. Dê destaque para suas principais&nbsp;habilidades e conquistas&nbsp;que alcançou nos últimos empregos.<br>O leitor deve terminar a carta com a confiança de que você é um ótimo profissional. Também deve curioso para conhecer melhor a sua formação e experiências anteriores. A partir daí ele vai conferir (no seu currículo) se você atende às exigências da vaga e, se você for selecionado, o recrutador poderá convidá-lo para uma&nbsp;<span style="font-weight: 700;">entrevista.<br>
          </span>A carta de apresentação e o currículo são <span style="font-weight: 700;">documentos complementares</span>.&nbsp;Eles&nbsp;devem estar bem redigidos para garantir uma boa impressão. O envio de ambos passa a impressão de que você é organizado, atento e cuidadoso com a carreira.<br>
          <span style="font-weight: 700;">
            <span style="font-size: 1.5rem;"> Estrutura:</span>
          </span>
          <br>
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-size: 1rem;">
                <span style="font-size: 1.125rem;"> Introdução -&gt;&nbsp;<span style="font-weight: 400;"> Objetivos pessoais. Fale sobre seu interesse na vaga e reforce que cumpre todos os requisitos da mesma.</span>
                </span>
              </span>
            </span>
          </span>
          <br>
          <span style="font-weight: 700;"> Desenvolvimento -&gt;&nbsp;<span style="font-weight: 400;"> Destaque o conteúdo do seu currículo. Por quais motivos você é o candidato ideal para a vaga? (Formação e habilidades). Como suas experiências anteriores podem colaborar com a empresa?</span>
          </span>
          <br>
          <span style="font-weight: 700;"> Conclusão -&gt;&nbsp;<span style="font-weight: 400;"> Por que mesmo você é o candidato ideal? (Reforce qualidades e habilidades). Não prolongue muito; Deixe seu telefone e email.</span>
          </span>
          <br>
        </p>
      </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-4" id="carousel_2d78">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-1">Currículo Cronológico</h3>
        <p class="u-text u-text-2">O currículo cronológico é bastante funcional. Sua estrutura facilita o trabalho dos recrutadores, pois ele permite ler o conteúdo de forma mais rápida e objetiva. Ele apresenta as informações em ordem cronológica começando sempre do mais recente.&nbsp;<br>É um modelo interessante para quem faz muitos cursos ao longo da trajetória ou passou por muitas empresas pois essa estrutura coloca em evidência o progresso da carreira. Ele reflete todo processo de aprendizagem e desenvolvimento do candidato, focando na evolução.<br>Não é indicado para recém-formados por geralmente não possuírem muita bagagem profissional. A mesma recomendação vale quando o tipo de experiência não condiz com o perfil da vaga pretendida. Também não é indicado para o candidato quem ficou um longo período sem trabalhar.&nbsp;<br>
          <span style="font-weight: 700;">
            <span style="font-size: 1.5rem;"> Estrutura:</span>
          </span>
          <br>
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-size: 1rem;">
                <span style="font-size: 1.125rem;"> Dados pessoais -&gt;&nbsp;<span style="font-weight: 400;"></span>
                </span>
              </span>
            </span>
          </span>Nesta seção, você deve incluir dados como seu nome completo, informações de contato (e-mail, número de&nbsp;telefone) e local de residência.<br>
          <span style="font-weight: 700;"> Resumo profissional -&gt;&nbsp;<span style="font-weight: 400;"></span>
          </span>Apesar de não se tratar de uma seção obrigatória, um resumo profissional pode ajudar a dar um pouco mais de contexto a seu respeito. Geralmente, um parágrafo de três a cinco linhas é suficiente para informar sua profissão/formação, nível de experiência, habilidades mais relevantes e objetivos de carreira. Esteja atento para que as informações apresentadas façam sentido para a vaga à qual você está se candidatando.<br>
          <span style="font-weight: 700;"> Experiência -&gt;&nbsp;<span style="font-weight: 400;"></span>
          </span>Informe todas as suas experiências laborais, caso sejam poucas, ou deixe apenas as mais relevantes e que mais fazem sentido para a vaga, se você tiver um histórico mais longo e variado. Liste as empresas nas quais trabalhou, os cargos que ocupou, uma descrição de suas atividades e o período de tempo que passou em cada emprego.<br>
          <span style="font-weight: 700;"> Educação -&gt;</span>&nbsp;​Dedique um espaço para apresentar as informações que dizem respeito à sua formação, começando pelas mais recentes (se for um currículo cronológico reverso) ou pelas mais antigas (se for um currículo cronológico normal). Neste caso, o indicado é organizar as informações em tópicos, indicando, em cada formação, o nome da instituição, o curso realizado e o grau obtido.<br>
          <span style="font-weight: 700;"> Habilidades -&gt;</span>&nbsp;​Neste caso, logicamente, não há uma ordem temporal a seguir. Apenas liste, em tópicos, as suas habilidades e competências relevantes para a vaga. Isso pode incluir conhecimentos variados, como habilidades em programas de computador, técnicas de vendas, rotinas de contabilidade etc. Também são valorizadas habilidades pessoais como liderança, trabalho em equipe, facilidade no aprendizado etc. Se você tiver certificações, prêmios recebidos ou qualquer outro indicativo que reforce as habilidades listadas, não deixe de mencioná-los.<br>
          <span style="font-weight: 700;"> Idioma -&gt;</span>&nbsp;​Esta é uma seção não obrigatória, mas cada vez mais relevante para muitas áreas e profissões. Liste, em tópicos, os idiomas pertinentes, indicando o nome da língua estrangeira e o seu nível de conhecimento de cada um. Caso tenha alguma certificação, aproveite para mencioná-la também.<br>
          <span style="font-weight: 700;"> Finalmente -&gt;</span>&nbsp;​O currículo cronológico no formato reverso é o modelo mais usado no mercado de trabalho e aquele que mais valoriza as competências de profissionais que já tem uma trajetória mais ou menos consistente em sua área. Se for o seu caso, este é o formato certo para você. Já o currículo cronológico normal tende a "disfarçar" melhor as inconsistências mais recentes em seu currículo, o que pode ser útil em determinadas situações.<br>
        </p>
      </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-5" id="carousel_d24b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h3 class="u-text u-text-1">Currículo Simples<br>
        </h3>
        <p class="u-text u-text-2"> Normalmente, um&nbsp;<b>currículo simples</b>&nbsp;inclui seus dados pessoais, destaca seu objetivo profissional, apresenta a sua formação acadêmica, mostra sua evolução profissional em ordem cronológica e dispõe um resumo de suas principais habilidades e qualificações.<br>Usado<span style="font-weight: 700;">&nbsp;<span style="font-weight: 400;"><b style="">
                <span style="font-weight: 400;">pa</span>
                <span style="font-weight: 400;">ra aproveitar oportunidades com melhores condições de trabalho, buscar recolocação no mercado, mudar de área de atuação ou até se candidatar ao primeiro emprego</span></b>
            </span>
          </span>, é possível personalizar um modelo de currículo simples e adaptá-lo ao seu propósito.<br>Muito usado por recém-formados, estudantes ou pessoas com pouca bagagem profissional.
        </p>
      </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-6" id="carousel_8235">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-1">Currículo com Foto</h3>
        <p class="u-text u-text-2">O currículo cronológico é bastante funcional. Sua estrutura facilita o trabalho dos recrutadores, pois ele permite ler o conteúdo de forma mais rápida e objetiva. Ele apresenta as informações em ordem cronológica começando sempre do mais recente.<br>É um modelo interessante para quem faz muitos cursos ao longo da trajetória ou passou por muitas empresas pois essa estrutura coloca em evidência o progresso da carreira. Ele reflete todo processo de aprendizagem e desenvolvimento do candidato, focando na evolução.<br>Não é indicado para recém-formados por geralmente não possuírem muita bagagem profissional. A mesma recomendação vale quando o tipo de experiência não condiz com o perfil da vaga pretendida. Também não é indicado para o candidato quem ficou um longo período sem trabalhar.<br>
          <span style="font-weight: 700;">
            <span style="font-size: 1.5rem;"> Dicas para tirar a foto:</span>
          </span>
          <br>-&gt; Escolha a roupa certa;<br>-&gt; Enquadre a foto do seu ombro para cima;<br>-&gt; Escolha um local bem iluminado;<br>-&gt; Use um fundo neutro;<br>-&gt; Pegue uma boa câmera;<br>-&gt; Sorria;
        </p>
      </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-7" id="carousel_c6aa">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h3 class="u-text u-text-1">Currículo Temático</h3>
        <p class="u-text u-text-2">O currículo temático também pode ser chamado de funcional. Ele pode ser exatamente o que você precisa se você tem as habilidades necessárias para uma vaga de trabalho específica, mas sua experiência não é tradicional. Esse currículo é dividido por competências, as quais são destacadas junto das habilidades. Muito usados por freelancers, profissionais autônomos ou pessoas que queiram mudar de carreira ou profissão.<br>
        </p>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-palette-3-base u-footer" id="sec-5124"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Feito por Maria Júlia Acorinte</p>
      </div></footer>
  
</body></html>