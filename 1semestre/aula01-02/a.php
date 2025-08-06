<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a</title>
</head>
<body>
    <div id="caixa">
        <form method="POST">
            <h1>Calculadora de Média</h1>
            Valores:
            <input type="number" name="v1" required>
            <input type="number" name="v2" required>
            <input type="number" name="v3" required>
            <input type="submit" name="submit" value="Calcular">
        </form>

        <?php
            if (isset($_POST['submit'])) {
            $v1 = $_POST['v1'];
            $v2 = $_POST['v2'];
            $v3 = $_POST['v3'];
            $media = ($v1 + $v2 + $v3) / 3;
            echo '<div id="resultado">';
            echo "A média de $v1, $v2 e $v3 é $media";
            echo "</div";
            }
        ?>
    </div>
</body>
</html>
