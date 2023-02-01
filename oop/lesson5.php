<?php 
    class SimpleInterest
    {
        //instance variables
        private $amount=0;
        private $rate=0;
        private $year=0;

        //constructor with default argument
        function __construct($amount,$rate=10,$year=1)
        {
            echo "<br/> constructor called <br/>";
            $this->amount = $amount;
            $this->rate = $rate;
            $this->year = $year;
        }
        function __destruct()
        {
            echo "<br/> Destructor called";
        }
        //methods
        function setAmount($amount)
        {
            $this->amount = $amount;
        }
        function setRate($rate)
        {
            $this->rate = $rate;
        }
        function setYear($year)
        {
            $this->year = $year;
        }
        function getInterest()
        {
            //local variable 
            $interest = ($this->amount * $this->rate * $this->year) / 100;
            return $interest;
        }
    }


    //Create object 
    $s1 = new SimpleInterest(10000000,11.25,1);
    $interest = $s1->getInterest();
    echo "Interest = $interest";

    $s2 = new SimpleInterest(50000,12.22);
    $interest = $s2->getInterest();
    echo "Interest = $interest";

    $s3= new SimpleInterest(50000);
    $interest = $s3->getInterest();
    echo "Interest = $interest";
?>