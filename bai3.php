<?php
    class Giaithua{
        public $n;

        function __construct($n){
            if(!is_int($n)){
                die ("N không phải là tham số");
            }
            $this->n = $n;
        }

        function giathua(){
            $result = 1;
            for( $i = 1; $i <= $this->n; $i++){
                $result *= $i;
            }
            return $result;
        }
    }
    $number1 = New Giaithua(8);
    echo $number1->giathua();

?>
