<!DOCTYPE html>
<html lang="pt.br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 4</title>
</head>

<body>
    <?php
    function mais5(&$num1, $num2) {
        $num1 += 5;
        $num2 += 5;
    }
    $a = $b = 1;
    mais5($a, $b);
    echo "a = $a e b = $b";
    echo "<br>";

    $a = $b = 5;
    mais5($a, $b);

    echo "a = $a e b = $b";
    ?>
</body>

</html>