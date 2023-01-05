<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class One</title>
</head>
<body>
    <?php $footaball = "Round and Round"; ?>


    <h2> Echo </h2>
    <?php echo "Bangladesh is amazing"; ?>
    <br>
    <?php echo 40; ?>

    
    <h2>Print_r</h2> 
        <pre>
    <?php print_r(array("Hello","world")) ?>
        </pre>

    <h2> Var Dump </h2>
    <?php var_dump("Hello world"); ?>
    <br>
    <?php var_dump(40); ?>
    <br>
    <pre>
       <?php var_dump(array("Hello","world")) ?>
    </pre>


    * String
    * Number
    * array
    * Object 
    * boolean

    <h2>Sting</h2>
    <?php 
        $cricket = "Sakib AL Hasan";
        $bd = "Bangladesh $cricket";

        echo $bd;
    ?>

    <h2>Number</h2>
    <?php echo 40; ?>

    <h2>Array</h2>
    <?php
    
        $country = array(50,"Argentina");
        var_dump($country);
    ?>

    <h2>Object</h2>
    <?php 
        class Car{
            public $color;
            public function drive(){
                return "Car Started";
            }
        }

        $car = new Car();
        $car->color = "green";
        echo $car->color . "<br>";
        echo $car->drive() . "<br>";

        $car2 = new Car();
        $car2->color = "gray" . "<br>";
        echo $car2->color . "<br>";
        echo $car2->drive();


       
    ?>

    <h4>Boolean</h4>
    <?php var_dump(true) ?>
    <?php var_dump(false) ?>

   
</body>
</html>