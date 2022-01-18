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
    // create a function
    // so you can call many users
    // write once, use many times
    function sayHi($name, $age){
        echo "Hello $name, you are $age <br>";
    }
    // call the function
    sayHi("Mike", 40);
    sayHi("Tom", 10);
    sayHi("Mac", 69);
    ?>
    
</body>
</html>