<?php 
    require_once("BaseClass.php");

    $book = new BaseClass();
    $book->name = "the power of subconcisious mind";
    $book->author = "Ram Mehta";
    $book->price = 100;
    $book->pages = 50;
    echo $book;
    echo "<br/> Author Name " . $book->author;
    echo "<br/> Book Name " . $book->name;
    echo "<br/> Book Name " . $book->isbn;
    if(isset($book->price)==true)
    {
        echo "<br/> Price key found";
    }
    else 
    {
        echo "<br/> Price key not found";
    }

    if(isset($book->version)==true)
    {
        echo "<br/> version key found";
    }
    else 
    {
        echo "<br/> version key not found";
    }
?>