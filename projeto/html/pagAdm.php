<?php
  session_start();
  if(empty($_SESSION['autorizado'])||($_SESSION['autorizado']!=true)){
    header("Location: ../html/login.html");
    die();
  }
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title><?php echo $_SESSION["nomeUsuario"];?> - Administrador</title>
    <link rel="stylesheet" href="../css/stylegeral.css" media="screen">
    <link rel="stylesheet" href="../css/pagAdm.css" media="screen">
    <link rel="icon" href="../images/foguete.png" type="image/x-icon"/>
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/java.js" defer=""></script>
    <meta name="generator" content="">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="icon" href="../images/logo.png" type="image/x-icon"/>
    
    
    
    
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
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-grey-90 u-text-hover-palette-2-base" href="perfilUsu.html" style="padding: 10px;"></a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item">
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-grey-90 u-text-hover-palette-2-base" href="" style="padding: 10px;">Informações</a>
</li><li class="u-nav-item"><a href="../php/logout.php" class="u-button-style u-nav-link u-text-active-palette-3-base u-text-grey-90 u-text-hover-palette-2-base" style="padding: 10px;">Sair</a>
</li></ul>
          </div>
    <div class="container" id="colunas">    
      <div class="row">      
        <table>
          <thead>
            <tr>
              <th>Incluir Registro</th>
              <th>Excluir/Mostrar Registro</th>            
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <form method="POST" action="../php/pagAdm.php">
                  <input type="hidden" name="operacao" value="incluir">
                  <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Informe seu nome"/>
                  </div>
                  <div class="form-group">
                    <label>Sobreome</label>
                    <input type="text" name="sobrenome" class="form-control" placeholder="Informe seu sobrenome"/>
                  </div>
                  <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Informe seu e-mail"/>
                  </div>
                  <div class="form-group">
                    <label>Data de nascimento</label>
                    <input type="date" name="datanasc" class="form-control" placeholder=""/>
                  </div>
                  <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control" maxlength="8" placeholder="Informe senha"/>
                  </div>
                  <div class="form-group">
                    <p>
                      <select size="1" name="perfil" id="perfil">
                              <option value="1">Visitante</option>
                              <option value="2">Administrador</option>
                            </select>
                          </p>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                  </div>      
                </form>
              </td>
              </div>
              <td>
                <form method="POST" action="../php/pagAdm.php">
                  <input type="hidden" name="operacao" value="excluir"/>
                  <div class="form-group">
                    <label>Código</label>
                    <input type="text" name="codigo" class="form-control" placeholder="Informe o código"/>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Excluir registro</button>
                  </div>
                </form>
                <div class="form-group">
                    <label>Clique no botão abaixo para exibir todos os registros:</label>
                </div>
                <form method="POST" action="../php/pagAdm.php">
                  <input type="hidden" name="operacao" value="mostrar">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Mostrar registros</button>
                  </div>                                
                </form>
                <div class="form-group">
                  <label>Clique no botão abaixo para exibir todas as mensagens:</label>
              </div>
                <form method="POST" action="../php/pagAdm.php">
                  <input type="hidden" name="operacao" value="mostrardois">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Mostrar mensagens</button>
                  </div>                                
                </form>
              </td>
            </div>
            </tr>
              <ul>
                
              </ul> 
          </tbody>    
        </table>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">    
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">   
    </script>
  </body>
  </html>