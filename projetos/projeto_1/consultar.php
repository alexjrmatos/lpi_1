<head>
    <link rel="stylesheet" href="global.css">
</head>

<?php

$conexao = mysql_connect("localhost:3306", "root", "root") or die ("Conexão ao banco de dados não realizada!");
$db = mysql_select_db("db_projeto_1") or die ("Banco de dados não encontrado!");

$query = "SELECT * FROM loja_tenis ORDER BY id";

$resultado = mysql_query($query) or die ("Não foi possível realizar a consulta ao banco de dados");

while ($linha=mysql_fetch_array($resultado)) {

$id = $linha["id"];
$marca = $linha["marca"];
$modelo = $linha["modelo"];
$cor = $linha["cor"];

echo utf8_decode("<b>Código no Sistema</b>: $id");
echo "<br>";
echo "<b>Marca</b>: $marca";
echo "<br>";
echo "<b>Modelo</b>: $modelo";
echo "<br>";
echo "<b>Cor</b>: "; 

if($cor === NULL || $cor === "") {
    echo utf8_decode("Não especificado");
} else { 
    echo "$cor";
}
echo "<br>";
echo "<hr>";

}

mysql_close($conexao);

?>

<title>Consulta de Produtos</title>
<style type="text/css">
    * {
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
    };
</style>
