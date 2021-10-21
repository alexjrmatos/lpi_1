<?php
    $head= '<html><head><title>Titulo</title><head><body>';
    echo $head;

    $conexao = mysql_connect("127.0.0.1:3306", "root", "root") or die("A conexão não foi completada.");
    
    mysql_select_db("db_alunos", $conexao) or die("Não foi possível selecionar o banco");

    $consulta = "SELECT * FROM tb_aluno";

    $resultado = mysql_query($consulta, $conexao);

	$num = mysql_num_rows($resultado);

	for($i=0; $i<$num; $i++) {
		list($ra, $nome, $endereco) = mysql_fetch_row($resultado);
		echo "RA: $ra <br /> Nome: $nome <br /> $endereco<br /><br />";
	};

	mysql_close($conexao);
?>