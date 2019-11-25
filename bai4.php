<?php
    class MyCalculator {  
      private $a, $b;  
      
      public function __construct( $a, $b) {  
        $this->a = $a;  
        $this->b = $b;  
      }  
      
      public function add() {  
        return $this->a + $this->b;  
      }  
      
      public function subtract() {  
        return $this->a - $this->b;  
      }  
      
      public function multiply() {  
        return $this->a * $this->b;  
      }  
    
      public function divide() {  
        return $this->a / $this->b;  
      }  
    }  
    $mycalc = new MyCalculator(12, 6);   
    echo $mycalc-> add(); 
    echo "<br>";
    echo $mycalc-> multiply(); 
    echo "<br>";
    echo $mycalc-> subtract(); 
    echo "<br>";
    echo $mycalc-> divide();
   ?>
