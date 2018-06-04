<!DCOTYPE html>
<html>
<body>
    <?php
    /**
     * Created by PhpStorm.
     * User: Administrator
     * Date: 5/18/2018
     * Time: 9:46 PM
     */
    $cars = array("Volvo","BMW","Toyoto");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "." . "<br>";
    $car1s = array(array("Volvo",100,96),array("BMW",60,59),array("Toyota",110,100));
    echo "I like ". $car1s[0][0] . "," . $car1s[0][1] . "," . $car1s[0][2] . "<br>";
    print_r($car1s) ;
    echo "<br>";
    echo date("Y/m/d") . "<br>";
    echo date("Y-m-d") . "<br>";
    ?>
</body>
</html>
