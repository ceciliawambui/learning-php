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
    // array slice, removes a certain part of an array
    $numbers=[1,2,3,4,5,6];
    print_r(array_slice($numbers, 3));


    // removes 3 items but we only need two items
    $numbers=[1,2,3,4,5,6];
    print_r(array_slice($numbers, 3, 2));

    // same as array_slice, but removes the slice returned from the original array
    $numbers=[1,2,3,4,5,6];
    print_r(array_splice($numbers, 3, 2));
    // returns the array without the sliced part
    print_r($numbers);
   
        ?>
</body>
</html>