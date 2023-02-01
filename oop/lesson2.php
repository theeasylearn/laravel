<?php 
    class Student 
    {
        public $name='',$age;
    }

    //create object of student
    
    $s1 = new Student;

    $s1->name = "Dhaivat";
    $s1->age = 24;
    
    echo "Name = " . $s1->name;
    echo "<br/> Age = " . $s1->age;


?>