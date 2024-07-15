<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="get" action="">
    <label for="text">Nome</label>
    <input type="text" name="nome"><br>
    <label for="number">Data de Nascimento</label>
    <input type="number" name="ano"><br>
    <label for="text">Sexo</label>
    <input type="radio" name="sexo" id="masc" value="homem" checked>
    <label for="masc">Masculino</label>
    <input type="radio" name="sexo" id="fem" value="mulher">
    <label for="fem">Feminino</label>
    <br>
    <input type="submit" value="Enviar">



</form>

<?php 


$nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
$ano =  isset($_GET["ano"])?$_GET["ano"]:"[não informado]";
$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[não informado]";
$idade = date("Y") - $ano;

echo "$nome é $sexo e tem $idade anos";


?>


</body>
</html>