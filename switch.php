<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" method="post">
        What was your grade?<br>
        <input type="text" name="grade"><br><br>
        <input type="submit">
</form>
    <?php
    $grade = $_POST["grade"];
    // echo $grade;
    switch($grade){
        case "A":
            echo "Well done!";
            break;
        case "B":
            echo "You did pretty good!";
            break;
        case "C":
            echo "You can do better!";
            break;
        case "D":
            echo "Pull up your socks!";
            break;
        case "F":
            echo "You failed!";
            break;
        default:
            echo "Invalid Grade";
            

    }

    ?>
    
</body>
</html>