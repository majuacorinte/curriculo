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
<link rel="stylesheet" href="../css/tutorial.css" media="screen">
<link rel="icon" href="../images/foguete.png" type="image/x-icon"/>
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/java.js" defer=""></script>
    <meta name="generator" content="">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo.png"
}</script>
    <meta name="theme-color" content="#3fb7fe">
    <meta property="og:title" content="tutorial">
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
    <section class="u-align-center u-clearfix u-section-1" id="sec-6247">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Como adicionar informações ao perfil?</h2>
        <p class="u-text u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        <div class="u-video u-video-1">
          <div class="embed-responsive embed-responsive-1">
            <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/L-hm3S1aSnI?mute=0&amp;showinfo=0&amp;controls=0&amp;start=0" frameborder="0" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-07cd">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Como fazer o download dos modelos?</h2>
        <p class="u-text u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        <div class="u-video u-video-1">
          <div class="embed-responsive embed-responsive-1">
            <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/L-hm3S1aSnI?mute=0&amp;showinfo=0&amp;controls=0&amp;start=0" frameborder="0" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="sec-21f5">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Navegando pela plataforma</h2>
        <p class="u-text u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        <div class="u-video u-video-1">
          <div class="embed-responsive embed-responsive-1">
            <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/L-hm3S1aSnI?mute=0&amp;showinfo=0&amp;controls=0&amp;start=0" frameborder="0" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-palette-3-base u-footer" id="sec-5124"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Feito por Maria Júlia Acorinte</p>
      </div></footer>
  
</body></html>