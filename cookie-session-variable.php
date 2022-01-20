<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- Cookie saves information on the user side -->
    <!-- Session saves information on the server side -->
    <!-- Session makes the website know who is the perso logged into the system, they get the username and password of the user -->
    <!-- Cookie shows data that is not dangerous, cannot be used by hackers , eg a dress on a site that you like shows as first thing when you open the site-->
    <!-- Session saves the data that would be dangerous if exposed to a hacker, eg password -->
    <!-- Session ends immediately you live the website -->
    <!-- A cookie has a time limit -->
    <!-- Creating a cookie -->
    <?php
    // to destroy a cookie automatically you use - 
    // to set a time, eg a day for the cookies to be destroyed use + 
    setcookie("name", "Daniel", time() - 86400);

    // creating a session
    // will always remember whhic user is logged in
    $_SESSION['name'] = "Daniel";

?>

</body>
</html>