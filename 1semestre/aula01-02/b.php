<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>b</title>
</head>
<body>
    <div id="caixa">
        <form method="POST">
            <h1>Calculadora de 15%</h1>
            Valor:
            <input type="number" name="v1" required>
            <input type="submit" name="submit" value="Calcular">
        </form>

        <?php
            if (isset($_POST['submit'])) {
            $v1 = $_POST['v1'];
            $porcentagem = $v1 * 0.15;
            echo '<div id="resultado">';
            echo "15% de $v1 é $porcentagem";
            echo '</div>';
            }
        ?>
    </div>
</body>
</html>
