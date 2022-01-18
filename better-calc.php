<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="better-calc.php" method="post">
        First num:<br>
         <input type="number" step="0.1" name="num1"><br>
        OP: <br>
        <input type="text" name="op"><br>
       Second num:<br>
       <!-- step allows one to add decimal numbers -->
        <input type="number" step="0.1" name="num2"><br>
        <br>
        <input type="submit">
</form>
<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op= $_POST["op"];

if($op == "+"){
    echo $num1 + $num2;
}elseif($op =="-"){
    echo $num2 - $num1;
}elseif($op =="/"){
    echo $num2/$num1;
}elseif($op =="*"){
    echo $num1 * $num2;
}else{
    echo "Invalid operator";
}
?>
    
</body>
</html>