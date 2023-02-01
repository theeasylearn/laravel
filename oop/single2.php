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
        function WhatICanDo()
        {
            echo "<br/> Person class whaticando method called....";
            $this->walk();
            $this->talk();
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
        //method overrdding
        function WhatICanDo()
        {
            parent::WhatICanDo(); //calling parent class whaticando method
            echo "<br/> Student class whaticando method called....";
            $this->read();
            $this->write();
        }
    }

    $s1 = new Student();

    $s1->WhatICanDo();

    $p1 = new Person();

    $p1->WhatICanDo();
?>