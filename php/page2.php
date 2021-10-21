<?php
if (isset($_POST["rdEmpresa"]) == true) {
    $emp = $_POST["rdEmpresa"];
    if (($emp != "") && ($emp == 1)) {
?>
        <font color="red">Pequena Empresa</font>
    <?php } else if (($emp != "") && ($emp == 2)) { ?>
        <font color="green">Media Empresa</font>
    <?php } else if (($emp != "") && ($emp == 3)) { ?>
        <font color="blue">Grande Empresa</font>
    <?php
    } else {
    ?>
        <font color="black">Opcao invalida</font>
<?php }
} ?>