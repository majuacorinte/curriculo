<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <title>Administra Clientes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>    
  <link href="../pagAdm.css" rel="stylesheet"/></head>
<body>
<?php
	$operacao = $_POST['operacao'];
	require('conexao.php');
	//$conexao = mysqli_connect('localhost','root','','curriculoweb');
  	if($operacao=='incluir'){
        if((!empty($_POST['nome'])) && (!empty($_POST['sobrenome'])) && (!empty($_POST['email'])) && (!empty($_POST['datanasc'])) && (!empty($_POST['senha']))){
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $email = $_POST['email'];
            $datanasc = $_POST['datanasc'];
            $senha = $_POST['senha']; 
            $perfil = $_POST['perfil']; 
    		$sql = "INSERT INTO CADASTRO VALUES('','$nome','$sobrenome','$email','$datanasc','$senha', '$perfil');";
    		if(mysqli_query($conexao,$sql)){
  	  		echo '<p class="text-center">Obrigado por se cadastrar em nosso site!</p>';
      		echo '<p class="text-center"><a href="../html/pagAdm.php"> Voltar</a></p>';
    		}
    		else{
      			echo '<p>Erro ao cadastrar no Banco de Dados.</p>';
      			echo '<p><a href="../html/pagAdm.php"> Voltar</a></p>';
    		}
  		}
  		else{
    		echo '<p class="text-center">Cadastro não efetuado.<br/>Favor preencher todos os campos.</p>';
    		echo '<p class="text-center"><a href="../html/pagAdm.php"> Voltar</a></p>';  
 		}
 	}
	elseif($operacao=='excluir'){
		$codigo = $_POST['codigo'];
		$sql = "DELETE FROM CADASTRO WHERE ID=$codigo";
		mysqli_query($conexao, $sql);
		//mysqli_affected_row() retorna o número de linhas afetadas
		$linhas = mysqli_affected_rows($conexao);
		if($linhas==1){
			echo '<p class="text-center">Cadastro excluído.</p>';
    		echo '<p class="text-center"><a href="../html/pagAdm.php"> Voltar</a></p>';
		}
		else{
			echo '<p class="text-center">Registro não encontrado.</p>';
    		echo '<p class="text-center"><a href="../html/pagAdm.php"> Voltar</a></p>';
		}
	} 
	else if($operacao=='mostrar'){
		$sql = "SELECT ID, NOME, EMAIL, PERFIL FROM CADASTRO";
		$selecao = mysqli_query($conexao, $sql);
		//mysqli_num_rows() retorna á quantidade selecionada
		$quantidadeSelecionada = mysqli_num_rows($selecao);
		echo '<h1 class="text-center">Lista de Clientes</h1>';
		echo '<table class="table table-striped">';  
      echo "<thead><tr><th>ID</th><th>Nome</th><th>E-mail</th><th>Perfil</th></thead>";
      echo '<tbody>';
      
    for($i=0; $i<$quantidadeSelecionada; $i++){
			//mysqli_fetch_row() guarda a linha atual da seleção em um vetor
			$vetor = mysqli_fetch_row($selecao);
      echo "\n<tr><td>".$vetor[0]."</td>";
      echo "<td>".$vetor[1]."</td>";       
      echo "<td>".$vetor[2]."</td>";     
      echo "<td>".$vetor[3]."</td></tr>";             
		}
    echo '</tbody></table>';
		echo '<p class="text-center"><a href="../html/pagAdm.php">Voltar</a></p>';
	}
	else{
		$sql = "SELECT ID_mensagem, NOME, EMAIL, txt FROM mensagem";
		$selecao = mysqli_query($conexao, $sql);
		//mysqli_num_rows() retorna á quantidade selecionada
		$quantidadeSelecionada = mysqli_num_rows($selecao);
		echo '<h1 class="text-center">Lista de Mensagens</h1>';
		echo '<table class="table table-striped">';  
      echo "<thead><tr><th>ID</th><th>Nome</th><th>E-mail</th><th>Mensagem</th></thead>";
      echo '<tbody>';
      
    for($i=0; $i<$quantidadeSelecionada; $i++){
			//mysqli_fetch_row() guarda a linha atual da seleção em um vetor
			$vetor = mysqli_fetch_row($selecao);
      echo "\n<tr><td>".$vetor[0]."</td>";
      echo "<td>".$vetor[1]."</td>";       
      echo "<td>".$vetor[2]."</td>";     
      echo "<td>".$vetor[3]."</td></tr>";             
		}
    echo '</tbody></table>';
		echo '<p class="text-center"><a href="../html/pagAdm.php">Voltar</a></p>';
	}
  
?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">    
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">   
  </script>
</body>
<html>






