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
    // class has attributes
    // blueprint
    class Book{
        var $title;
        var $author;
        var $pages;
        // using the constructor, it reduced the line of codes
        // create new parameters at the constructor then
        // using this keyword, assign the old variables to new varibles
        // this is for them to call them in the function
        // in the object below, add parameters with exact values of the variables,


        function __construct($aTitle, $aAuthor, $aPages){
            $this->title=$aTitle;
            $this->author=$aAuthor;
            $this->pages=$aPages;
        }
    }
    // creating an object
    // an object is an instance of a class
    $book1 = new Book("Harry Potter", "JK Rowling", 400);
    $book2 = new Book("Lord of Rings", "Tolkien", 800);
   

    echo $book1->author;
    echo $book1->title;
    echo $book2->author;
    
    ?>
    
</body>
</html>