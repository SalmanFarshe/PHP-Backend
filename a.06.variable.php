<?php
    $almighty = "Allah";
    echo "I love " . $almighty . "!";
?>
    <pre>
    var_dump(5);
    var_dump("John");
    var_dump(3.14);
    var_dump(true);
    var_dump([2, 3, 56]);
    var_dump(NULL);
    </pre>
<?php
    $x = $y = $z = "Fruit";
    echo $x;
    echo $y;
    echo $z;
?>

<?php
    # variable scope in php
    // global
    $x = 45;
    
    // local
    function local()
    {
        $x = 50;
    }
    local();
    ?>
        <br>
    <?php
    // global from local 
    $x = 5;
    function myTest() {
        global $x;
        $y = $x;
    }

    // static
    function myTest1() {
        static $a = 0;
        echo $a;
        $a++;
    }
    function myTest2() {
        $b = 0;
        echo $b;
        $b++;
    }
    // for static keyword the variable will changes each time and output 0 1 2 otherwise 0 0 0
    myTest1();
    myTest1();
    myTest1();
    ?>
        <br>
    <?php
    myTest2();
    myTest2();
    myTest2();
?>