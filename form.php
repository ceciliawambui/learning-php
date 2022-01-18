<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form action="form.php" method="get">
       Name:<br>
         <input type="text" name="name"><br><br>
         Age:<br>
         <input type="number" name="age"><br>
         <br>
         Religion<br>
         <input type="text" name="religion"> <br>
         <br>
         <input type="submit">
    <br>

    <!-- The GET will help in getting the name that one inputs on the form -->
    Your name is:<?php
    echo  $_GET["name"]
     ?>
     <br>
     Your age is: <?php echo $_GET["age"]?> <br>
     Your religion is: <?php echo $_GET["religion"]?>
</form>
</body>
</html>