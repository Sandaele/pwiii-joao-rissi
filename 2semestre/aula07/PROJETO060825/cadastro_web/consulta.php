<?php
$host = 'localhost';
$dbName = 'veiculos_db';
$user = 'root';
$pwd = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar com o banco.");
}

$stmt = $conn->query("SELECT * FROM automovel ORDER BY id DESC");
$veiculos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consulta</title>
    <style>
        #acoes { display: none; margin-top: 10px; }
        .select-col { display: none; }
    </style>
</head>
<body>
    <h1>Consulta de Veículos</h1>

    <button type="button" onclick="alternarSelecao()">Selecionar</button>

    <form method="GET">
    <br><table border="1">
        <tr>
            <th class="select-col"></th>
            <th>ID</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Placa</th>
            <th>Cor</th>
            <th>Valor</th>
        </tr>
        <?php foreach ($veiculos as $v): ?>
            <tr>
                <td class="select-col"><input type="radio" name="id" value="<?= $v['id'] ?>"></td>
                <td><?= $v['id'] ?></td>
                <td><?= htmlspecialchars($v['modelo']) ?></td>
                <td><?= $v['ano'] ?></td>
                <td><?= htmlspecialchars($v['placa']) ?></td>
                <td><?= htmlspecialchars($v['cor']) ?></td>
                <td>R$ <?= number_format($v['valor'], 2, ',', '.') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div id="acoes">
        <button type="submit" formaction="editar.php">Editar</button>
        <button type="submit" formaction="deletar.php" onclick="return confirm('Deseja excluir este registro?')">Excluir</button>
    </div>
    </form>

    <script>
        function alternarSelecao() {
            const acoesDiv = document.getElementById('acoes');
            const colunasSelecao = document.querySelectorAll('.select-col');

            if (acoesDiv.style.display === 'none') {
                acoesDiv.style.display = 'block';
                colunasSelecao.forEach(el => el.style.display = 'table-cell');
            } else {
                acoesDiv.style.display = 'none';
                colunasSelecao.forEach(el => el.style.display = 'none');
            }
        }
    </script>

        <br><a href="index.php">Voltar</a>
</body>
</html>
