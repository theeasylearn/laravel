<?php 
    class BaseClass 
    {
        protected $data = array();
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
        public function __clone()
        {
            $this->data['accno'] = rand(1000,9999);
        }
    }
?>