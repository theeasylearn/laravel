<?php 
    class Student 
    {
        //instance variable

        private $name='',$age;
        
        //constant
        private const COUNTRY = 'INDIA';
        public function setName($name)
        {
            $this->name = $name;
        }
        public function setAge($age)
        {
            $this->age = $age;
        }
        public function getAge()
        {
            return $this->age;
        }
        public function getName()
        {
            return $this->name;
        }
        public function getCountry()
        {
            return Student::COUNTRY;
        }
    }

    //create object of student
    
    $s1 = new Student;

    // $s1->name = "Dhaivat"; //wont work because variables are private
    // $s1->age = 24; //wont work because variables are private
    
    $s1->setName('Ankit Patel');
    $s1->setAge(37);

    echo "Name = " . $s1->getName();
    echo "<br/> Age = " . $s1->getAge();
    echo "<br/> Country = " . $s1->getCountry();


?>