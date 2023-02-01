<?php 
    //example of Hierarchical inheritance
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
    class Teacher extends Person
    {
        function teach()
        {
            echo "<br/> I can teach php";
        }
        function help()
        {
            echo "<br/> I can help for php subject";
        }
        function WhatICanDo()
        {
            $this->teach();
            $this->help();
            $this->walk(); //calling parent class method from child class method as if it own method
            $this->talk();
        }
    }
    //create object 
    $s1 = new Student();
    $s1->WhatICanDo();

    $t1 = new Teacher();
    $t1->WhatICanDo();
    
?>