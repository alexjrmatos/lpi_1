<?php
    $head= '<html><head><title>Exercicio 2</title><head><body>';
    echo $head;

    $conexao = mysql_connect("127.0.0.1:3306", "root", "root") or die("A conexão não foi completada.");
    
    mysql_select_db("db_alunos", $conexao) or die("Não foi possível selecionar o banco");

    $consulta = "UPDATE tb_aluno SET endereco = 'Rua C' WHERE ra = 1;";

    $resultado = mysql_query($consulta, $conexao);

    echo $resultado;

	mysql_close($conexao);
?>