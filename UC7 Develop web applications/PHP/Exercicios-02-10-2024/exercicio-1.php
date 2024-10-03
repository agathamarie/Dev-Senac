<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <form action="" method="get">
        Valor A: <input type="number" name="valora">
        Valor B: <input type="number" name="valorb">
        Valor C: <input type="number" name="valorc">
        <input type="submit">
    </form>

    <?php
        // 1. Leia valores A, B e C, em seguida, imprima a soma entre A e B e mostre se a soma é < que C
        $valora = $_GET['valora'];
        $valorb = $_GET['valorb'];
        $valorc = $_GET['valorc'];

        $soma = $valora + $valorb;
        $resultado = $soma < $valorc 
            ? 'A soma entre A e B (' . $soma . ') é menor que C' 
            : ($soma > $valorc 
                ? 'A soma entre A e B (' . $soma . ') é maior que C' 
                : 'A soma entre A e B (' . $soma . ') é igual a C');
        echo $resultado;
    ?>
</body>
</html>
