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

if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = (int)$_GET['id'];
    $stmt = $conn->prepare("DELETE FROM automovel WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: consulta.php?deletado=1");
exit;
