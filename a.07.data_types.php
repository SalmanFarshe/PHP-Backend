<?php
    // <!-- String
    // Integer
    // Float (double)
    // Boolean
    // Array
    // Object
    // NULL
    // Resource -->

    // string
    $x = "Hello world!";
    $y = 'Hello world!';
    var_dump($x);
    echo "<br>";
    var_dump($y);

    ?>
        <br>
    <?php

    
    // int
    $x = 5985;
    var_dump($x);

    ?>
        <br>
    <?php


    // float or double
    $x = 10.365;
    var_dump($x);

    ?>
        <br>
    <?php


    // bool
    $x = true;
    var_dump($x);


    ?>
        <br>
    <?php


    //array 
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);

    ?>
        <br>
    <?php

    // obj
    class Car {
        public $color;
        public $model;
        public function message() {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }
    $myCar = new Car("red", "Volvo");
    var_dump($myCar);
    
    ?>
        <br>
    <?php
    
    // null
    $x = "Hello world!";
    $x = null;
    var_dump($x)
?>