<?php 
    require_once("BaseClass.php");
    $dharmik = new BaseClass();
    $dharmik->fullname = "Dhameliya Dharmik";
    $dharmik->accno = rand(1000,9999);
    $dharmik->gender = "Male";
    $dharmik->city = "Bhavnagar";
    echo $dharmik;

    $another_dharmik = clone $dharmik; //object cloning

    echo $another_dharmik;
?>