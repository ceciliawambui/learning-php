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
    $odd_numbers =[1,3,5];
    $even_numbers = [2,4,6];
    $all_numbers = array_merge($odd_numbers, $even_numbers);
    print_r($all_numbers);
    ?>
</body>
</html>