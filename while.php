<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // loops first before printing, so if the first number does not qualify, it is not printed
    $index=1;
    while($index<=20){
        echo "$index <br>";
        // infinite loops, in the case you forget to increment
        $index++;
    }
    ?>
    
</body>
</html>