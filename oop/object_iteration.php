<?php 
    class Course
    {
        public $name = "Laravel", $days = 90;
        private $fees = 8500, $isCertified = true;
        protected $trainer = 'ankit patel';
        public function debug()
        {
            echo "<table border='2' align='center' >";
            foreach ($this as $key => $value)
            {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            echo "</table>";
        }
    }

    $s1 = new Course();

    $s1->debug();

    echo "<h1>Only public instance variable<h1>";
    echo "<table border='2' align='center' >";
    foreach ($s1 as $key => $value)
    {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
?>