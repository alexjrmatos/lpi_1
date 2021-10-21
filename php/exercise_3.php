<!DOCTYPE html>
<html lang="pt.br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 3</title>
</head>

<body>
    <?php
    $d = getdate();
    switch ($d['wday']) {
        case 5:
            echo ("Finalmente Sexta");
            break;
        case 6:
            echo ("Super Sábado");
            break;
        case 0:
            echo ("Domingo Sonolento");
            break;
        default:
            echo ("Estou esperando pelo fim da semana");
    }
    ?>
</body>

</html>