<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- double quoted strings can format strings using defined variables -->
<?php
$name="Wesley Thanos";
$school="Othaya Boys";

//convert the string to lowercase
echo strtolower($name);
// convert the string to uppercase
echo strtoupper($school);
// to get the length of a string
echo strlen($name);
echo strlen($school);
// getting the string at index 
echo $name[1];
// changing a certain value at a certain index
$name[0] ="H";
echo $name;
// replace a string

echo str_replace("Hesley", "Austin", $name);

// substr returns a part of the string
echo substr ($name,8,2);


// echo "<h2>His name is</h2> $name";
// echo "<h2>He schooled at </h2> $school";


?>
    
</body>
</html>



