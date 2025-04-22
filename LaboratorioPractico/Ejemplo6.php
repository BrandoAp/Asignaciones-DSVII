<?php
    class Mammal extends Animal{
        function breathesAir(){
            echo "inhale";
        }
    }

    $horse = new Mammal();
    $horse -> setName("Louis");
?>