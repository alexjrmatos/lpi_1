<?php

    $preco = $_POST["precoProd"];
    $modelo = $_POST["modeloProd"];
    $estoque = $_POST["noEstoque"];

    if($estoque == "Sim" || $estoque == "sim") {
        $estoque = 1;
    } else {
        $estoque = 0;
    }

    $query = "INSERT INTO armazem (preco, modelo, no_estoque) VALUES ('$preco', '$modelo', '$estoque')";


    $conexao = mysql_connect("localhost:3306", "root", "root") or die ("Conexão ao banco de dados não realizada!");
    $db = mysql_select_db("armazem_eletronicos") or die ("Banco de dados não encontrado!");

    $sql = mysql_query($query) or die ("Falha ao gravar os dados!");

    echo "<h1>Cadastro efetuado com sucesso!</h1>";
    mysql_close($conexao);

?>