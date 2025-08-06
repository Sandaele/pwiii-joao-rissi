<?php
    include_once("conexao.php");
    $codigo      = $_POST['codigo'];
    $descricao   = $_POST['descricao'];
    $descricao_abreviada = $_POST['descricao_abreviada'];
    $valor1      = $_POST['valor1'];
    $valor2      = $_POST['valor2'];
    $unidade     = $_POST['unidade'];
    $categoria   = $_POST['categoria'];
    $email       = $DATE;
    $email       = $DATE;
  

	echo $codigo."<BR>";
	echo $descricao."<br>";
    echo $valor1."<BR>";

    $verifica_produto = $pdo->prepare("SELECT codigo FROM produto WHERE codigo = :p");
    $verifica_produto->bindValue(":p", $codigo);
    $verifica_produto->execute();
    $count = $verifica_produto->rowCount();
      if($count == 0){
        //$pdo->query("INSERT INTO cliente_temp (nome, Endereco, bairro, cidade, uf, email) VALUES ('$nome','$endereco','$bairro','$cidade','$uf','$email')");
       $pdo->query("INSERT INTO cliente_temp (nome, Endereco, bairro, cidade, uf, email ) VALUES ('$nome','$endereco','$bairro','$cidade', '$uf', '$email')");
  
       echo"<br>Cadastro realizado com sucesso!";
        echo ("<br>INSERT INTO cliente (nome, endereco, bairro, cidade, uf, email) VALUES ('$nome','$endereco','$bairro','$cidade','$uf','$email')");
         
    }
    else{
        echo"Cliente ja cadastrado";    
        } 
 
    
?>