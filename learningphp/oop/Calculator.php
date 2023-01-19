<?php
    class Calculator{

        public $num1;
        public $num2;

        public function __construct($n1,$n2)
        {
            $this->num1 = $n1;
            $this->num2 = $n2;
        }
        
        public function add(){
            $sum = $this->num1 + $this->num2;
            $this->multi();
            return $sum;

        } 

        public function multi(){
            $sum = $this->num1 * $this->num2;
            return $sum;

        }

        public function subs(){
            $sum = $this->num1 - $this->num2;
            return $sum;
        }

        public function divide(){
            $sum = $this->num1 / $this->num2;
            return $sum;
        }

        
    }


?>