<?php 
    //example of single level inheritance
    class Person 
    {
        function walk()
        {
            echo "<br/>I can walk";
        }
        function talk()
        {
            echo "<br/>I can talk";
        }
    }
    class Student extends Person
    {
        function read()
        {
            echo "<br/> I can read";
        }
        function write()
        {
            echo '<br/> I can write';
        }
        function WhatICanDo()
        {
            $this->read();
            $this->write();
            $this->walk(); //calling parent class method from child class method as if it own method
            $this->talk();
        }
    }

    //create object 
    $s1 = new Student();
    $s1->read();
    $s1->write();

    $s1->walk();
    $s1->talk();

    $s1->WhatICanDo();
?>