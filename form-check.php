<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form-check.php" method="post">
      Apples: <br>
      <input type="checkbox" name="fruits[]" value="apples"><br>
        
        Oranges: <br>
        <input type="checkbox" name="fruits[]" value="oranges"><br>
       
        Pears: <br>
        <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit">

</form>
<?php
$fruits = $_POST["fruits"];
echo $fruits[0];
// echo $fruits[1];
// echo $fruits[2];

?>
</body>
</html>