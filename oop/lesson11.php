<?php 
class Society
{
    protected $data = array();
    public static $name = "Iscon Wings, Bhavnagar";
    public static $president = "Ankit Patel";

    public function __isset($key)
    {
        return isset($this->data[$key]);
    }
    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }
    public function __get($key)
    {
        if(isset($this->data[$key])==true)
            return $this->data[$key];
        else 
            return 'variable not found';
    }
    public function __toString()
    {
        echo "<br/>" . str_repeat("-",100);
        echo "<table border='2' align='center' cellpadding='10'>";
        foreach($this->data as $key=>$value)
        {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
        echo "<br/>" . str_repeat("-",100);
        return '';
    }
    public static function display()
    {
        echo "<br/> society name " . Society::$name;
        echo "<br/> society president name " . Society::$president;
    }
    public static function __callStatic($name, $arguments)
    {
        echo "<br/> $name method does not exist";
    }
}
    $house1 = new Society;
    $house1->owner = 'Diya Patel';
    $house1->length = 200;
    $house1->width = 300;
    $house2 = new Society;
    $house2->owner = 'Jiya Patel';
    $house2->length = 250;
    $house2->width = 400;
    echo $house1;
    echo $house2;
    Society::show();
    Society::display();    
    Society::$president = "Ankit Mahendrakumar Patel";
    Society::display();
?>