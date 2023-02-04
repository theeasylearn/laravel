<?php 
    class SingleTon
    {
        private static $instance = null;
        public $name,$city;
        private function __construct()
        {
            echo '<br/> __construct';
            $this->name = "The easylearn academy";
            $this->city = "Bhavngar";
        }
        public static function getInstance()
        {
            echo '<br/> getInstance';
            if(SingleTon::$instance==null)
                SingleTon::$instance = new SingleTon();
            return SingleTon::$instance;
        }   
        public function __toString()
        {
            echo '<br/>';
            return $this->name . " " . $this->city;
        }
    }

    $class1 = SingleTon::getInstance();
    echo $class1;

    $class2 = SingleTon::getInstance();
    echo $class2;

    $class3 = SingleTon::getInstance();
    echo $class3;

    $class1->city = 'Baroda';
    echo $class1;
    echo $class2;
    echo $class3;
?>