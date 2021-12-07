<?php

    $conexao = mysql_connect("localhost:3306", "root", "root") or die ("Conexão ao banco de dados não realizada!");
    $db = mysql_select_db("armazem_eletronicos") or die ("Banco de dados não encontrado!");

    $query = "SELECT * FROM armazem ORDER BY id";

    $resultado = mysql_query($query) or die ("Não foi possível realizar a consulta ao banco de dados");

    while ($linha=mysql_fetch_array($resultado)) {
        $id = $linha["id"];
        $modelo = $linha["modelo"];
        $preco = $linha["preco"];
        $no_estoque = $linha["no_estoque"];

        echo utf8_decode("<b>Código no Sistema</b>: $id");
        echo "<br>";
        echo utf8_decode("<b>Preço</b>: $preco");
        echo "<br>";
        echo "<b>Modelo</b>: $modelo";
        echo "<br>";
        echo "<b>Temos no estoque?</b>: "; 

        if($no_estoque === 0) {
            echo utf8_decode("Não!");
        } else { 
            echo("Sim!");
        }
        echo "<br>";
        echo "<hr>";

    }

    mysql_close($conexao);

?>

<head>
    <link rel="stylesheet" href="global.css">
</head>
<title>Consulta de Produtos</title>
<style type="text/css">
    * {
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
    };
</style>
