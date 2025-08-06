<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>c</title>
</head>
<body>
    <div id="caixa">
        <form method="POST">
            <h1>Calculadora de 5% e 50%</h1>
            Valor:
            <input type="number" name="v1" required>
            <input type="submit" name="submit" value="Calcular">
        </form>

        <?php
            if (isset($_POST['submit'])) {
            $v1 = $_POST['v1'];
            $p1 = $v1 * 0.05;
            $p2 = $v1 * 0.5;
            echo '<div id="resultado">';
            echo "5% de $v1 é $p1 e 50% é $p2";
            echo '</div>';
            }
        ?>
    </div>
</body>
</html>
