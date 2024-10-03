<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <form action="" method="get">
        Número: <input type="number" name="numero">
        <input type="submit">
    </form>

    <?php
        // 3. Receba um numero e mostre seu sucessor e antecessor
        $numero = $_GET['numero'];

        echo 'O antecessor é '.$antecessor = $numero - 1 .' e o sucessor é '.$sucessor = $numero + 1;
    ?>
</body>
</html>