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
    // echo max(3,6); simple way of getting the maximum number
    function getMax($num1, $num2){
        if($num1 > $num2){
            return $num1;
            // echo "Num 1 is greater than num 2";
        }else{
            return $num2;
        }

            // echo "Num 2 is greater than num 1"; 
    }
    echo getMax(300,60);

    ?>
    <?php
    function getGreatest($num1, $num2, $num3){
        if($num1 >=$num2 && $num1>=$num3){
            return $num1;
        }elseif($num2 >=$num1 && $num2>=$num3){
            return $num2;
        }else{
            return $num3;
        }
    }
    echo getGreatest(100,20,39);
    ?>
    
</body>
</html>