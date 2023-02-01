<?php 
    class Area
    {
        public function getArea($length=0,$width=0)
        {
            //func_num_args function returns count of arguments passed while calling functions
            if(func_num_args()>=3)
                die("<br/> this function can works only upon two arguments");
            else 
            {
                if($length!=0 && $width!=0)
                {
                    return $length * $width;
                }
                else if($width==0)
                {
                    return $length * $length;
                }
                else 
                    return 0;
            }   
        }
        function __call($name,$arguments)
        {
            return "<br/> $name function does not exists";
        }
    }
    $object = new Area();
    echo "<br/> getArea function with 2 arguments " . $object->getArea(10,20);
    echo "<br/> getArea function with 1 arguments " . $object->getArea(10);
    echo "<br/> getArea function with 0 arguments " . $object->getArea();
    //below line will call __call() megic method as no such function exists.    
    echo "<br/> Display function called " . $object->display();
    echo "<br/> getArea function with 3 arguments " . $object->getArea(10,20,30);
?>