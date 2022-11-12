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
  <link rel="icon" href="images/logo.jpg" type="image/x-icon"/>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2|Gloria+Hallelujah&display=swap" rel="stylesheet"/>
  <link href="" rel="stylesheet"/>
  <link href="" rel="stylesheet"/>     
</head>
<body>
<?php
require('conexao.php');
//$conexao = mysqli_connect("localhost","root","","curriculoweb");
$operacao = $_POST['operacao'];
  if($operacao=='mostrar'){
    $sql = "SELECT NOME, EMAIL, txt FROM mensagem";
    $selecao = mysqli_query($conexao, $sql);
    //mysqli_num_rows() retorna á quantidade selecionada
    $quantidadeSelecionada = mysqli_num_rows($selecao);
    echo '<h1 class="text-center">Lista de Mensagens</h1>';
    echo '<table class="table table-striped">';  
  echo "<thead><tr><th>Nome</th><th>E-mail</th><th>Mensagem</th></thead>";
  echo '<tbody>';
  
for($i=0; $i<$quantidadeSelecionada; $i++){
        //mysqli_fetch_row() guarda a linha atual da seleção em um vetor
        $vetor = mysqli_fetch_row($selecao);
  echo "\n<tr><td>".$vetor[0]."</td>";
  echo "<td>".$vetor[1]."</td>";       
  echo "<td>".$vetor[2]."</td>";                 
    }
echo '</tbody></table>';
    echo '<p class="text-center"><a href="../html/perfilUsu.php">Voltar</a></p>';
}
?>
</body>
</html>