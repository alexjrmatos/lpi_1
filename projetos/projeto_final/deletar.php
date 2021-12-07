<?php
$idinformado = $_POST["idinformado"];

$query = "DELETE FROM loja_tenis WHERE id = $idinformado";

$conexao = mysql_connect("localhost:3306", "root", "root") or die ("Conexão ao banco de dados não realizada!");
$db = mysql_select_db("db_projeto_1") or die ("Banco de dados não encontrado!");

$sql = mysql_query($query) or die ("Falha ao alterar os dados!");

echo utf8_decode("<h1>Exclusão efetuada com sucesso!</h1>");
mysql_close($conexao);
?>