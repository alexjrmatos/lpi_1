<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <?php
    if (isset($_GET["txtTexto"]) == true) {
        $texto = $_GET["txtTexto"];
        if ($texto != "")
            echo "Você digitou $texto<br><br>";
    }
    ?>
    <form method=“get" action="form2.php">
        <input type="text" name="txtTexto" value="" size=10>
        <br>
        <input type="submit" name="btnEnviar" value="Enviar!">
    </form>
</body>

</html>