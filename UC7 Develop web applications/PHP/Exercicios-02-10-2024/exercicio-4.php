<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <form action="" method="get">
        Peso: <input type="number" name="peso">
        Altura: <input type="number" name="altura">
        <input type="submit">
    </form>

    <?php
        // 4. Crie um formulario para calcular IMC e mostre o resultado
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];

        echo 'O seu IMC é ' . $peso / $altura **2;
    ?>
</body>
</html>