<?php
$host = 'localhost';
$dbName = 'veiculos_db';
$user = 'root';
$pwd = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco.");
}

$mensagem = "";
$erroPlaca = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $placa = strtoupper(trim($_POST['placa']));
    if (strlen($placa) !== 7) {
        $erroPlaca = "A placa deve ter exatamente 7 caracteres.";
    } else {
        try {
            $sql = "INSERT INTO automovel (modelo, ano, placa, data_cadastro, cor, valor) 
                    VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                trim($_POST['modelo']),
                (int)$_POST['ano'],
                $placa,
                date('Y-m-d'),
                trim($_POST['cor']),
                (float)$_POST['valor']
            ]);
            $mensagem = "<p style='color:green'>Veículo cadastrado com sucesso.</p>";
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                $mensagem = "<p style='color:red'>Placa já cadastrada.</p>";
            } else {
                $mensagem = "<p style='color:red'>Erro: " . htmlspecialchars($e->getMessage()) . "</p>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro de Veículos</h2>

    <?= $mensagem ?>

    <form action="cadastro.php" method="POST">
        <label>Modelo:</label>
        <input type="text" name="modelo" maxlength="30" required><br>

        <label>Ano:</label>
        <input type="number" name="ano" min="1900" max="<?= date('Y')+1 ?>" required><br>

        <label>Placa:</label>
        <input type="text" name="placa" minlength="7" maxlength="7" pattern="[A-Za-z0-9]{7}" required>
        <?php if($erroPlaca) echo "<span style='color:red;'>$erroPlaca</span>"; ?>
        <br>

        <label>Cor:</label>
        <input type="text" name="cor" maxlength="15" required><br>

        <label>Valor:</label>
        <input type="number" step="0.01" name="valor" required><br>

        <button type="submit">Gravar</button>
        <button type="reset">Limpar</button>
    </form>

    <br><a href="index.php">Voltar</a>
</body>
</html>
