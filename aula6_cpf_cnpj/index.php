<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação do CNPJ</title>
</head>
<body>
<h1>Validação de CNPJ</h1>
<form action="" method="post">
    Informe o CNPJ sem os Pontos: <input type="number" name="cnpj" maxlength="14">
    <input type="submit" value="Verificar">
</form>
<br>
<form action="" method="post">
    Informe o CPF sem os Pontos: <input type="number" name="cpf" maxlength="11">
    <input type="submit" value="Verificar">
</form>
<?php
    require("funcoes.php");
    if (!empty($_POST["cpf"])) {
        if(isset($_POST["cpf"])){
            if (validaCpf($_POST["cpf"])) {
                echo "<font color='green'><b>CPF Válido!</b></font>";
            }else{
                echo "<font color='red'><b>CPF Inválido!</b></font>";
            }
        }else{
            echo "Favor informar um CPF válido!";
            }
        }

    if (!empty($_POST["cnpj"])) {
        if(isset($_POST["cnpj"])){
            if (validaCnpj($_POST["cnpj"])) {
                echo "<font color='green'><b>CNPJ Válido!</b></font>";
            }else{
                echo "<font color='red'><b>CNPJ Inválido!</b></font>";
            }
        }else{
            echo "Favor informar um CNPJ válido!";
             }
        }
?>    
</body>
</html>