<?php 
    //example of single level inheritance
    //base class / super class / parent class 
    class Person 
    {
        protected $name = '';
        function __construct($name)
        {
            echo '<br/> Person class constructor called...';
            $this->name = $name;
        }
        function walk()
        {
            echo "<br/> {$this->name}  can walk";
        }
        function talk()
        {
            echo "<br/>{$this->name} can talk";
        }
    }
    // sub class or child class or derviced class 
    class Student extends Person
    {
        private $language = '';
        function __construct($name,$language)
        {
            parent::__construct($name); //calling parent class constructor
            echo '<br/> Student class constructor called...';
            $this->language = $language;
        }
        function read()
        {
            echo "<br/> {$this->name} can read {$this->language}";
        }
        function write()
        {
            echo "<br/> {$this->name} can write {$this->language}";
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
    $s1 = new Student('Dipali','Gujarati');
    $s1->read();
    $s1->write();

    $s1->walk();
    $s1->talk();

    $s1->WhatICanDo();
?>