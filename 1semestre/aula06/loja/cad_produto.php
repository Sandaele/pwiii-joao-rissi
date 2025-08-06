<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cad-Produto</title>
</head>
<body>
    <form action="cadastrar.php" autocomplete ="off" method="POST" >
        <h1 align="Center">CADASTRO - Produto</h1>
       
        <label for="descricao">CODIGO: </label>
        <input type="text" id="id_codigo" name="codigo" required size="10" maxlength="10">
        <br><br>


        <label for="descricao">DESCRICAO: </label>
        <input type="text" id="id_descricao" name="descricao" required size="50" maxlength="50">
        <br><br>

        <label for="id_descricao_abreviada">DESCRICAO ABREVIADA: </label>
        <input type="text" id="id_descricao_abreviada" name="descricao_abreviada" required size="30" maxlength="30">
        <br><br>

        <label for="id_valor1">VALOR1: </label>
        <input type="number" id="id_valor1" name="valor1" >
        <br><br>

        <label for="id_valor2">VALOR2: </label>
        <input type="number" id="id_valor2" name="valor2" >
        <br><br>

        <label for="id_unidade">UNIDADE:</label>
        <input type="text" id="id_unidade" name="unidade" required size="2" maxlength="2"> 
        <br><br>

        <label for="id_categoria">CATEGORIA :</label>
        <input type="text" id="categoria" name="categoria" required size="3" maxlength="3"> 
        <br><br>

             
        <input type="submit" name="enviar" value="ENVIAR">  
    </form>

</body>
</html>