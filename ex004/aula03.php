<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    span.texto{
        font-size: <?php echo $tam; ?>;
        color: <?php echo $cor; ?>;
    }
</style>
<body>
    
    <form method="get" action="">
        <label for="itxt">Texto</label>
        <input type="text" name="t" id="itxt"><br>
        <label for="itam">Tamanho</label>
        <select name="tam" id="itam">
            <option value="8pt">8</option>
            <option value="10pt">10</option>
            <option value="14pt">14</option>
            <option value="20pt">20</option>
            <option value="40pt">40</option>
           <br> 
        </select>
        <label for="icor">Cor</label>
        <input type="color" name="cor" id="icor"><br>
        <input type="submit" value="Gerar"> 
    </form>



<?php 

    $txt = $_GET["t"];
    $tam = $_GET["tam"];
    $cor = $_GET["cor"];

    echo "<span class='texto'>$txt</span>";
    



?>

</body>
</html>