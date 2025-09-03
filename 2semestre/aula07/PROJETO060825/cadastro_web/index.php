<?php 

$host = 'localhost';
$dbName = 'veiculos_db';
$user = 'root';
$pwd = '';

$conn = new PDO("mysql:host=$host; dbname=$dbName", "$user", "$pwd");

$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$placa = $_POST['placa'];
$valor = $_POST['valor'];
$cor = $_POST['cor'];
$data_cadastro = date('Y-m-d');

$stmt = $conn->prepare("SELECT placa FROM automovel WHERE placa = ?");
$stmt->execute([$placa]);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $modelo = isset($_POST['modelo']) ? $_POST['modelo'] : null;
    $ano = isset($_POST['ano']) ? $_POST['ano'] : null;
    $placa = isset($_POST['placa']) ? $_POST['placa'] : null;
    $valor = isset($_POST['valor']) ? $_POST['valor'] : null;
    $cor = isset($_POST['cor']) ? $_POST['cor'] : null;
    $data_cadastro = date('Y-m-d');

    if ($modelo && $ano && $placa && $valor && $cor) {
        $stmt = $conn->prepare("SELECT placa FROM automovel WHERE placa = ?");
        $stmt->execute([$placa]);

        if ($stmt->rowCount() > 0) {
            echo "<script>alert('Placa já está cadastrada');</script>";
        } else {
            $sql = "INSERT INTO automovel (modelo, ano, placa, data_cadastro, cor, valor) 
                    VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$modelo, $ano, $placa, $data_cadastro, $cor, $valor]);

            echo "<script>alert('Veículo cadastrado com sucesso');</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>CAD-WEB</h1>

    <div>
    <button type="button" onclick="toggleCadastro()">Cadastro</button>
    <button type="button" onclick="alert('WIP')">Consulta</button>
    </div>

    <div id="cadastro-container">
    <form action="index.php" method="POST">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required>
        <br>
        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" required>
        <br>
        <label for="placa">Placa:</label>
        <input type="text" id="placa" name="placa" required>
        <br>
        <label for="cor">Cor:</label>
        <input type="text" id="cor" name="cor" required>
        <br>
        <label for="valor">Valor:</label>
        <input type="text" id="valor" name="valor" required>
        <br>
        <div>
        <button type="submit">GRAVAR</button>
        <button type="reset">LIMPAR</button>
        </div>
    </form>
    </div>

    <script>
    function toggleCadastro() {
    const container = document.getElementById("cadastro-container");
    container.style.display = (container.style.display === "none" || container.style.display === "")
        ? "block"
        : "none";
    }
    </script>
</body>
</html>