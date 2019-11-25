<?php
    class Number{
        public $array;
        
        function __construct(array $array){
            $this->array = $array;
        }

        function sapxep(){
            sort($this->array, SORT_NUMERIC);
            foreach ($this->array as $key => $val){
                echo "Số thứ ". $key. " là: ". $val. "</br>";
            }
        }
    }
    $array1 = new Number([25,40,45,78,59]);
    $array1->sapxep();
?>
