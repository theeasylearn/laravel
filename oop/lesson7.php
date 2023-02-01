<?php 
    class Fruit{
        private $name,$color,$season,$price;
        public function __construct($name,$color,$season,$price)
        {
            $this->name = $name;
            $this->color = $color;
            $this->season = $season;
            $this->price = $price;
        }
        public function __toString()
        {
            return "<br/> name = " . $this->name . " Color = " . $this->color . " season = " . $this->season . " price = " . $this->price;
        }
    }

    $apple = new Fruit("Apple","red","winter",20);
    echo $apple;

    $mango = new Fruit("Mango","yellow","summer",100);
    echo $mango;
?>