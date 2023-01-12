<?php 
    include "Calculator.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $numberone = $_POST['numberone'];
        $numbertwo = $_POST['numbertwo'];

        $calculator = new Calculator();
        $sum = $calculator->add($numberone,$numbertwo);
    

    }

?>
