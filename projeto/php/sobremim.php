<?php
require('conexao.php');
//$conexao = mysqli_connect("localhost","root","","curriculoweb");
if((!empty($_POST['titulo'])) &&  (!empty($_POST['txt']))){
    $titulo = $_POST['titulo'];
    $txt = $_POST['txt'];;
     
    $sql = "INSERT INTO sobremim VALUES('','$titulo','$txt');";
    if(mysqli_query($conexao,$sql)){
  	  echo '<p class="text-center">Texto adicionado com sucesso!</p>';
    }
    else{
      echo '<p class="text-center">Erro ao enviar no Banco de Dados.</p>';
    }
  }
  else{
    echo '<p class="text-center">Texto não inserido.<br/>Favor preencher todos os campos.</p>'; 
  } 

  $selecionado = mysqli_query($conexao, $sql);
  if(mysqli_num_rows($selecionado)==1){
		//Transforma o selecionado em vetor
				  $vetor = mysqli_fetch_row($selecionado);

				  //Preenche a sessão
				  $_SESSION["meutitulo"] = $vetor[1]; 
			  
			  }


?>
$servername = "localhost";
$database = "curriculoweb";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Conexao falha: " . mysqli_connect_error());
}
echo "Conectado";
mysqli_close($conn);
