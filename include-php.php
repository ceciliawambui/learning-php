<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- including a php file in current php file and being able to print the outcome from that php file -->
    <?php 
    $title ="My First Post";
    $author ="Cecilia";
    $wordCount = "400";
    include"article-header.php"
    ?>
    <?php include"useful-tools.php";
    echo $feetInMile;
    sayHi("Cecilia");
     ?>
</body>
</html>