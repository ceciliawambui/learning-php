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
    // use sort to sort arrays in ascending order
    $numbers = [3,5,8,7,3,4,5];
    sort($numbers);
    print_r($numbers);

    // use rsort to sort arrays in descending order
    $numbers = [3,5,8,7,3,4,5];
    rsort($numbers);
    print_r($numbers);


    ?>
    
</body>
</html>