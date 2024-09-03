<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post" action="">

    <label for="base_tri">Me dê a base do triângulo: </label>
    <input type="number" id="base_tri" name="base_tri" step="any" required>

    <label for="alt_tri">Me dê a altura do triângulo: </label>
    <input type="number" id="alt_tri" name="alt_tri" step="any" required>

    <button type="submit" name="area" id="botao">Calcular</button>
</form>
</body>
</html>

<?php 
$area = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['area'])) {
        $base = $_POST['base_tri'];
        $altura = $_POST['alt_tri'];
        
        $area = ($base * $altura) / 2;
        
        echo "<p>A área do triângulo é: " . $area . " unidades quadradas.</p>";
    }
}

        if ($area <100){
            echo "<p>area é menor que 100</p>";
        }
        else
        echo "<p>area é maior que 100</p>"
?>

