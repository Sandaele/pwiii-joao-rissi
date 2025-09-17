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

if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
    header("Location: consulta.php");
    exit;
}
$id = (int)$_GET['id'];

$stmt = $conn->prepare("SELECT * FROM automovel WHERE id = ?");
$stmt->execute([$id]);
$veiculo = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$veiculo) {
    die("Veículo não encontrado.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $sql = "UPDATE automovel 
                   SET modelo = ?, ano = ?, placa = ?, cor = ?, valor = ? 
                 WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            trim($_POST['modelo']),
            (int)$_POST['ano'],
            strtoupper(trim($_POST['placa'])),
            trim($_POST['cor']),
            (float)$_POST['valor'],
            $id
        ]);
        header("Location: consulta.php?editado=1");
        exit;
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) { // placa duplicada
            $mensagem = "<p style='color:red'>Placa já cadastrada.</p>";
        } else {
            $mensagem = "<p style='color:red'>Erro: " . htmlspecialchars($e->getMessage()) . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Veículo</title>
</head>
<body>
    <h2>Editar Veículo</h2>

    <?= $mensagem ?>

    <form action="editar.php?id=<?= $id ?>" method="POST">
        <label>Modelo:</label>
        <input type="text" name="modelo" value="<?= htmlspecialchars($veiculo['modelo']) ?>" maxlength="30" required><br>

        <label>Ano:</label>
        <input type="number" name="ano" value="<?= htmlspecialchars($veiculo['ano']) ?>" min="1900" max="<?= date('Y')+1 ?>" required><br>

        <label>Placa:</label>
        <input type="text" name="placa" value="<?= htmlspecialchars($veiculo['placa']) ?>" maxlength="8" required><br>

        <label>Cor:</label>
        <input type="text" name="cor" value="<?= htmlspecialchars($veiculo['cor']) ?>" maxlength="15" required><br>

        <label>Valor:</label>
        <input type="number" step="0.01" name="valor" value="<?= htmlspecialchars($veiculo['valor']) ?>" required><br>

        <button type="submit">Salvar</button>
        <a href="consulta.php">Cancelar</a>
    </form>
</body>
</html>
