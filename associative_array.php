<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Associative arrays make use of keys in place of index -->
    <?php
    $grades = array("Jim"=>"A+", "Pam"=>"B+", "Oscar"=>"C-");
    echo $grades["Oscar"];
    // echo $grades["Jim"];
    // echo $grades["Pam"];
    $grades["Jim"]= "F";
    echo $grades["Jim"];
    ?>
    
</body>
</html>