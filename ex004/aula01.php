<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="get" action="aula01.php">

        <input type="number" name="v">
        <input type="submit" value="Calcular Raiz">

    




    </form>

<?php 

    $valor = $_GET["v"];
    $rq = sqrt($valor);

    echo "A variável valor é $valor";
    echo "<br>A raiz quadrada de $valor é igual a " . number_format($rq, 2);





?>

</body>
</html>