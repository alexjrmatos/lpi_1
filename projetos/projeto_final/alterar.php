<?php
$info = $_POST["infos"];
$newinfo = $_POST["newinfo"];
$idinformado = $_POST["idinformado"];

if($info == "no_estoque") {
    if($newinfo == "Sim" || $newinfo == "sim") {
        $newinfo = 1;
    } else {
        $newinfo = 0;
    }
}


$query = "UPDATE armazem SET $info = '$newinfo' WHERE id = $idinformado";

$conexao = mysql_connect("localhost:3306", "root", "root") or die ("Conexão ao banco de dados não realizada!");
$db = mysql_select_db("armazem_eletronicos") or die ("Banco de dados não encontrado!");

$sql = mysql_query($query) or die ("Falha ao alterar os dados!");

echo utf8_decode("<h1>Alteração efetuada com sucesso!</h1>");
mysql_close($conexao);
?>

<head>
    <link rel="stylesheet" href="global.css">
</head>
<title>Alteração de Produtos</title>
<style type="text/css">
    * {
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
    };
</style>