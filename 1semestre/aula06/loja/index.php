<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAMOSO FORMS</title>
</head>
<body>
    <form action="cadastrar.php" autocomplete ="off" method="POST" >
        <h1 align="Center">CADASTRO</h1>

        <label for="nomeo">NOME: </label>
        <input type="text" id="id_nome" name="nome" required size="50" maxlength="50">
        <br><br>

        <label for="id_descricao">ENDERECO: </label>
        <input type="text" id="id_endereco" name="endereco" size="50" maxlength="50">
        <br><br>

        <label for="id_bairro">BAIRRO: </label>
        <input type="text" id="id_bairro" name="bairro"  size="30" maxlength="30">
        <br><br>

        <label for="id_cidade">CIDADE:</label>
        <input type="text" id="id_cidade" name="cidade" size="30" maxlength="30"> 
        <br><br>

        <label for="id_uf">UF :</label>
        <input type="text" id="uf" name="uf"  size="2" maxlength="2"> 
        <br><br>

        <label for="id_cep">CEP :</label>
        <input type="text" id="cp" name="cep" size="8" maxlength="8"> 
        <br><br>

        <label for="id_email">EMAIL :</label>
        <input type="text" id="email" name="email" required size="50" maxlength="50"> 
        <br><br>

        <label for="id_celular">CELULAR :</label>
        <input type="text" id="celular" name="celular" size="20" maxlength="20"> 
        <br><br>
      
        <input type="submit" name="enviar" value="ENVIAR">  
    </form>

</body>
</html>