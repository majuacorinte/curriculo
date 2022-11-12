<?php  
session_start();	
/*
  Verificar se existe um email enviado via POST
*/
	if(isset($_POST["email"])){
    	$email = $_POST["email"];
    	$senha = $_POST["senha"];
		$perfil = $_POST["perfil"];
    }
	//$conexao = mysqli_connect("localhost","root","","curriculoweb");
	require('conexao.php');
    
	$sql = "SELECT * FROM CADASTRO WHERE EMAIL='$email' AND SENHA='$senha' AND PERFIL='$perfil'";

//Executar a instrução no banco   
  	$selecionado = mysqli_query($conexao, $sql);
    
	//Verifica se selecionou 1 cliente
	/*if(mysqli_num_rows($selecionado)==1){
		//Transforma o selecionado em vetor
				  $vetor = mysqli_fetch_row($selecionado);
		
		//Preenche a sessão 
				  $_SESSION["autorizado"] = true;
				  $_SESSION["nomeUsuario"] = $vetor[1]; 
			  
				  $perfilBanco = $vetor[5];
				  if ($perfilBanco == 1){
					  header("Location: perfilUsu.php");
					 // header("Location:../pagAdm.php");
				  }else{
					  header("Location: pagAdm.php");
					  //header("Location:../Perfil.php");
				  }
				//$vetorSelecionado = mysqli_fetch_row($selecionado);
			  }*/

	  if(mysqli_num_rows($selecionado)==1){
		//Transforma o selecionado em vetor
				  $vetor = mysqli_fetch_row($selecionado);

				  //Preenche a sessão
				  $_SESSION["autorizado"] = true;
				  $_SESSION["nomeUsuario"] = $vetor[1]; 
			  
				  $perfilBanco = $vetor[5];
				  if ($perfil == 1){
					//header("Location: perfilUsu.php");
					header("Location: ../html/perfilUsu.php");
				  }
				else{
					header("Location: ../html/pagAdm.php");
					//header("Location:../Perfil.php");
				//$vetorSelecionado = mysqli_fetch_row($selecionado);
				}
			  }
			  if(mysqli_num_rows($selecionado)==2){
				$vetor = mysqli_fetch_row($selecionado);

				//Preenche a sessão
				$_SESSION["autorizado"] = true;
				$_SESSION["nomeUsuario"] = $vetor[1]; 
			
				$perfilBanco = $vetor[5];
				if($perfilBanco == 2){
					header("Location: ../html/pagAdm.php");
					//header("Location:../Perfil.php");
				}
				else{
					header("Location: ../html/perfilUsu.php");
					//header("Location:../pagAdm.html");
				}
			}
			
			  else{
				   echo '<p>Usuário não encontrado</p>';
				   echo '<p><a href="../html/login.html">Voltar</a></p>';
			  }
		


?>