<?php
    class human{
        public $leg;

        function run(){
            return "human run by legs";
        }
    }
    $nguyen = new human();
    $leg_hien = '2chan';
    echo $nguyen->run()." ".$leg_hien;
?>