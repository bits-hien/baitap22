<?php
    class human {
        public $hand;
        public $leg;
        private $heart;

        function __construct(){
            return "human da duoc khoi tao";
        }
    }

    $hien = new human();
    echo $hien->__construct();
?>