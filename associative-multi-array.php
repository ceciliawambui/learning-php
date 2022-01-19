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
    $people=[
        "john_doe"=>[
            "name"=>"John",
            "surname"=>"Doe",
            "age"=>25,
        ],
        "jane_doe"=>[
            "name"=>"Jane",
            "surname"=>"Doe",
            "age"=>45,
        ],
    ];

    print_r($people);
    ?>
    
</body>
</html>