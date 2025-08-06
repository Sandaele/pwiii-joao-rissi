<?php
    include_once("conexao.php");
    $nome      = $_POST['nome'];
    $endereco  = $_POST['endereco'];
    $bairro    = $_POST['bairro'];
    $cidade    = $_POST['cidade'];
    $uf        = $_POST['uf'];
    $email     = $_POST['email'];
    $cep       = $_POST['cep'];
    $celular   = $_POST['celular'];
  
	echo $nome."<BR>";
	echo $endereco."<br>";
    echo $bairro."<BR>";
	echo $cidade."<br>";
    echo $uf."<br>";
    echo $email."<BR>";

    $verifica_produto = $pdo->prepare("SELECT nome FROM cliente WHERE nome = :p");
    $verifica_produto->bindValue(":p", $nome);
    $verifica_produto->execute();
    $count = $verifica_produto->rowCount();
      if($count == 0){
       //$pdo->query("INSERT INTO cliente_temp (nome, Endereco, bairro, cidade, uf, email) VALUES ('$nome','$endereco','$bairro','$cidade','$uf','$email')");
      // $pdo->query("INSERT INTO cliente (nome, Endereco, bairro, cidade, uf, email, datcad, datalt, usuario_cad, usuario_alt ) VALUES ('$nome','$endereco','$bairro','$cidade', '$uf', '$email', 'curdate()', 'curdate()', 'user()', 'user()')");
      $pdo->query("INSERT INTO cliente (nome, Endereco, bairro, cidade, uf, CEP, celular, email, datcad, datalt, usuario_cad, usuario_alt) VALUES ('$nome','$endereco','$bairro','$cidade', '$uf', '$cep','$celular', '$email', curdate(), curdate(), user(), user())");
   
       echo"<br>Cadastro realizado com sucesso!";
        echo ("<br>INSERT INTO cliente (nome, endereco, bairro, cidade, uf, email, usuario_cad, usuario_alt, usuario_cad, usuario_alt) VALUES ('$nome','$endereco','$bairro','$cidade','$uf','$email', curdate(), curdate(), user(), user())");
         
    }
    else{
        echo"Cliente ja cadastrado";    
        //echo ("<BR>INSERT INTO produtos(produto, descricao, unidade_produtos, valor1, valor2, IPI, margem, fornecedor) VALUES('$produto','$descricao','$unidade','$valor1','$valor2','$ipi','$margem','$fornecedor')");
    } 
 
    
?>