<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <title>msg</title>
  <!--Para sites de busca encontrar o site-->
  <meta name="keywords" content=""/>
  <meta name="description" content=""/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>
  <link rel="icon" href="../images/logo.jpg" type="image/x-icon"/>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2|Gloria+Hallelujah&display=swap" rel="stylesheet"/>
  <link href="" rel="stylesheet"/>
  <link href="" rel="stylesheet"/>     
</head>
<body>
  <?php 
  require('conexao.php');
  //$conexao = mysqli_connect("localhost","root","","curriculoweb");
  if((!empty($_POST['nome'])) &&  (!empty($_POST['email'])) && (!empty($_POST['txt']))){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $txt = $_POST['txt'];
     
    $sql = "INSERT INTO mensagem VALUES('','$nome','$email','$txt');";
    if(mysqli_query($conexao,$sql)){
  	  echo '<p class="text-center">Mensagem enviada com sucesso!</p>';
    }
    else{
      echo '<p class="text-center">Erro ao enviar no Banco de Dados.</p>';
    }
  }
  else{
    echo '<p class="text-center">Mensagem não enviada.<br/>Favor preencher todos os campos.</p>'; 
  } 
  

  ?>
</body>
</html>







