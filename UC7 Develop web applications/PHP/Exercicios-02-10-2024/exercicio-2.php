<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <form action="" method="get">
        Número: <input type="number" name="numero">
        <input type="submit">
    </form>

    <?php
        // 2. Receba um numero qualquer e mostre se é impar ou par
        $numero = $_GET['numero'];

        $resultado = $numero % 2 == 0 ? 'É par' : 'É ímpar';
        echo $resultado;
    ?>
</body>
</html>