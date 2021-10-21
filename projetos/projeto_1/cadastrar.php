<?php
$marca = $_POST["marcaProd"];
$modelo = $_POST["modeloProd"];
$cor = $_POST["corProd"];

$query = "INSERT INTO loja_tenis (marca, modelo, cor) VALUES ('$marca', '$modelo', '$cor')";

$conexao = mysql_connect("localhost:3306", "root", "root") or die ("Conexão ao banco de dados não realizada!");
$db = mysql_select_db("db_projeto_1") or die ("Banco de dados não encontrado!");

$sql = mysql_query($query) or die ("Falha ao gravar os dados!");

echo "<h1>Cadastro efetuado com sucesso!</h1>";
mysql_close($conexao);
?>