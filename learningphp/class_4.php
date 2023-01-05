<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Four</title>
</head>
<body>
    <h2>$_SERVER</h2>

    <?php
        echo $_SERVER["PHP_SELF"] . "<br>";
        echo $_SERVER["SERVER_NAME"] . "<br>";
        echo $_SERVER["SERVER_ADDR"] . "<br>";
        echo $_SERVER["HTTP_HOST"] . "<br>";
        echo $_SERVER["SERVER_PORT"] . "<br>";
        echo $_SERVER["SERVER_SOFTWARE"] . "<br>";
        echo $_SERVER['REQUEST_METHOD'];
    ?>

    <h4>GET</h4>
    <a href="test.php?firstname=arman&lastname=hossain" target="_blank"> Send Data </a>
    
    <?php $joe = "Hello"; ?>

    <h2><?php echo $joe; ?></h2>

    <?php
        echo " Hello world  "; ?>

    <?php echo "Hell duniya"; ?>
    <br>

    <h5>FORM WITH GET METHOD</h5>
    <form action="test.php" method="GET">
        <input type="text" name="fname" >
        <input type="text" name="lname" >
        <input type="submit">
    </form>

    <h5> Form With POST METHOD</h5>

    



    



</body>
</html>