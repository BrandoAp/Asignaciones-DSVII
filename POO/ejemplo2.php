<?php
    class MyClass{
        public $public = 'public <br>';
        protected $protected = 'protected <br>';
        private $private = 'private <br>';

        function printHello(){
            echo $this ->public;
            echo $this -> protected;
            echo $this -> private;
        }
    }

    $obj =new MyClass();
    //echo $obj->public();
    //echo $obj->protected();
    //echo $obj->private();
    echo $obj->printHello();
?>