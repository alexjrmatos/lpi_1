<?php
    $head= '<html><head><title>Exercicio 3</title><head><body>';
    echo $head;

    $conexao = mysql_connect("127.0.0.1:3306", "root", "root") or die("A conexão não foi completada.");
    
    mysql_select_db("db_alunos", $conexao) or die("Não foi possível selecionar o banco");

    /*
        Exercicio 3.1
    */
    $consulta = "SELECT * FROM tb_peca WHERE cidade = 'uberlandia'";

    $resultado = mysql_query($consulta, $conexao);

    echo $resultado;

    /*
        Exercicio 3.2
    */

	mysql_close($conexao);
?>