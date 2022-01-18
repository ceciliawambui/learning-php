<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mad_libs_game.php" method="get">
     Color:<br>
     <input type="text" name="color"><br>
     <br>
     Plural noun: <br>
     <input type="text" name="plural"><br>
     <br>
     Celebrity: <br>
     <input type="text" name="celebrity"><br>
     <br>
    <input type="submit">
</form>
    <?php
    $color = $_GET["color"];
    $plural = $_GET["plural"];
    $celebrity = $_GET["celebrity"];

    echo "Roses are $color. <br>";
    echo " $plural are blue. <br>";
    echo "I love $celebrity<br>";
    ?>
    
</body>
</html>