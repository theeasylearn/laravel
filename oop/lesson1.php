<?php 
    class SimpleInterest
    {
        //instance variables
        var $amount=0;
        var $rate=0;
        var $year=0;

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
    $s1 = new SimpleInterest();
    $s1->setAmount(1000);
    $s1->setRate(12.5);
    $s1->setYear(5);
    $interest = $s1->getInterest();
    echo "Interest = $interest";
?>