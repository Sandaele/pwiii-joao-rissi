<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Web</title>
</head>
<body>
    <h1>CAD-WEB</h1>
    
    <div>
        <button type="button" onclick="">Cadastro</button>
        <button type="button" onclick="WIP">Consulta</button>
    </div>
    
    <div id="formCadastro">
        <form action="processa.php" method="POST">
            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" required>

            <label for="ano">Ano:</label>
            <input type="number" id="ano" name="ano" required>

            <label for="placa">Placa:</label>
            <input type="text" id="placa" name="placa" required>

            <label for="cadastro">Cadastro:</label>
            <input type="date" id="cadastro" name="cadastro" required>
        </form>
        
        <div>
            <button type="submit" onclick="">GRAVAR</button>
            <button type="reset" onclick="">LIMPAR</button>
            <button type="button" onclick="">VOLTAR</button>
        </div>
    </div>
</body>
</html>
