<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Inheritance refers to whereby a class inherits all the functionality all the attributes from another class -->
    <?php
    class Chef{
        function makeChicken(){
            echo "The chef makes chicken<br>";
        }
        function makeSalad(){
            echo "The chef makes salad<br>";
        }
        function makeBbq(){
            echo "The chef makes bbq ribs <br>";
        }
      
    }
    class ItalianChef extends Chef{
        function makePasta(){
            echo "The Italian chef makes pasta<br>";
        }
        //overriding
        // same function as the inherited class but different content
        function makeBbq(){
            echo "The chef is making chicken parm<br>";

        }
    }
    $chef =new Chef();
    // $chef->makeChicken();
    // $chef->makeSalad();
    $chef->makeBbq();
    

    $italianChef = new ItalianChef();
    // $italianChef->makeChicken();
    $italianChef->makePasta();
    $italianChef->makeChicken();

    

    
    ?>
    
</body>
</html>