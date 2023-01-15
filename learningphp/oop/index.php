<?php 
    include "Calculator.php";
    $sum = "";
    $multi = "";
    $divide = "";
    $subs = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $numberone = $_POST['numberone'];
        $numbertwo = $_POST['numbertwo'];

        $calculator = new Calculator($numberone,$numbertwo);
       
        $sum = $calculator->add();

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

        <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="mb-3">
                <label for="numberone" class="form-label">Number One</label>
                <input type="number" class="form-control" name="numberone"  id="numberone">
            </div>

            <div class="mb-3">
                <label for="numbertwo" class="form-label">Number Two</label>
                <input type="number" class="form-control" name="numbertwo" id="numbertwo">
            </div>
         
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <h2 class="text-center bg-warning text-white"><?php echo $sum ; ?></h2>
        <h2 class="text-center bg-warning text-white"><?php echo $multi ; ?></h2>
        <h2 class="text-center bg-warning text-white"><?php echo $divide ; ?></h2>
        <h2 class="text-center bg-warning text-white"><?php echo $subs ; ?></h2>
    </div>    


</body>
</html>