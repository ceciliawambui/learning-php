<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Arrays can be used as stacks and queues -->
    <?php
    // Use array_push to push a member at the end of the array
    $numbers=[1,2,3];
    array_push($numbers, 4);
    print_r($numbers);

    // use array_pop to pop member at the end of the array
    $numbers=[1,2,3,4];
    array_pop($numbers);
    print_r($numbers);

    // to push a member at the start of the array, you use array_unshift
    $numbers=[1,2,3,4];
    array_unshift($numbers, 5);
    print_r($numbers);

    // to pop a member at the start of the array, you use array_shift
    $numbers=[1,2,3,4];
    array_shift($numbers);
    print_r($numbers);

    ?>
</body>
</html>