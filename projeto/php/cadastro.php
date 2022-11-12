<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <title>cadastro</title>
  <!--Para sites de busca encontrar o site-->
  <meta name="keywords" content=""/>
  <meta name="description" content=""/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>
  <link rel="icon" href="images/logo.jpg" type="image/x-icon"/>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2|Gloria+Hallelujah&display=swap" rel="stylesheet"/>
  <link href="" rel="stylesheet"/>
  <link href="" rel="stylesheet"/>     
</head>
<body>
  <?php
  require('conexao.php');
  //$conexao = mysqli_connect("localhost","root","","curriculoweb");
  if((!empty($_POST['nome'])) && (!empty($_POST['sobrenome'])) && (!empty($_POST['email'])) && (!empty($_POST['datanasc'])) && (!empty($_POST['senha']))){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $datanasc = $_POST['datanasc'];
    $senha = $_POST['senha'];
     
    $sql = "INSERT INTO CADASTRO VALUES('','$nome','$sobrenome','$email','$datanasc','$senha', 1);";
    if(mysqli_query($conexao,$sql)){
  	  echo '<p class="text-center">Obrigado pela visita! Cadastro realizado com sucesso!</p>';
      echo '<p class="text-center"><a href="../html/login.html"> Voltar</a></p>';
    }
    else{
      echo '<p class="text-center">Erro ao cadastrar no Banco de Dados.</p>';
      echo '<p class="text-center"><a href="../html/cadastro.html"> Voltar</a></p>';
    }
  }
  else{
    echo '<p class="text-center">Cadastro não efetuado.<br/>Favor preencher todos os campos.</p>';
    echo '<p class="text-center"><a href="../html/cadastro.html"> Voltar</a></p>';  
  }  	    
  ?>
</body>
</html>







