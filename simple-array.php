<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Arrays refers to a special type of variable that contain variables and hold them in a list -->
    <?
    // Initialize an array and assign values
    $odd_numbers = [1,3,5,7,9];
    $even_numbers = [0,2,4,6,8];
    // Asigning the first odd as index 0
    $first_odd=$odd_numbers[0];
    $third_even=$even_numbers[2];
    // printing thr first odd
    echo "<h1>The first number in the odd numbers list is</h1> $first_odd";
    echo "<h1>The third number in the even numbers list is </h1> $third_even";
    // print the numbers
    print_r($odd_numbers);

    // Adding new variables using index
    $odd_numbers[5]=11;
    print_r($odd_numbers);

    // To delete an array you use unset 
    unset($odd_numbers[2]) ;
    print_r($odd_numbers);

    // you use count to count the number of members in the array
    echo count($odd_numbers);

    // Use reset function to get the first member in the list and also to reset the internal iteration pointer
    $first_item = reset($odd_numbers);
    echo "<h2>First item is $first_item </h2>";

    // end function gets the last member in the array
    $last_member = end($odd_numbers);
    echo "<h3>Last item is $last_member </h3>";

    // We can also use the count function to get the last index
    
    $last_index = count($odd_numbers) - 1;
    $last_item = $odd_numbers[$last_index];
    echo "Last index is $last_item";

    ?>
</body>
</html>