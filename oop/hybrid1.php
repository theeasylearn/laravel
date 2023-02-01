<?php 
    //example of hybrid level inheritance
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
    trait Animal
    {
        function eat()
        {
            echo "<br/>I can eat";
        }
        function sleep()
        {
            echo "<br/>I can sleep";
        }
    }
    class Student extends Person
    {
        use Animal;
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
            $this->eat();
            $this->sleep();
        }
    }
    class Developer extends Student
    {
        function code()
        {
            echo "<br/> I can write code in php";
        }
        function debug()
        {
            echo "<br/> I can debug code in php";
        }
        function WhatICanDo()
        {
            parent::WhatICanDo();
            $this->code();
            $this->debug();
        }
    }
    //create object 
    $d1 = new Developer();
    $d1->WhatICanDo();
?> 