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
    $isMale = true;
    $isTall =false;
    if ($isMale && $isTall){
        echo "You are a Tall Male";
    }elseif ($isMale && !$isTall){
        echo "You are a short male";
    }elseif(!$isMale && $isTall){
        echo "You are not male but tall";       
    }else {
        echo "You are not male";
    }
    ?>
    
</body>
</html>