<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];

        $link = new mysqli("localhost","root","","scholify");
        $insert_row = $link->query("insert into student(firstname,lastname) values('$firstname','$lastname')");
        if($insert_row){
            echo "Data inserted Successfully";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud From</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h2 class="text-white text-center bg-warning p-3">Crud Operation</h2>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" id="firstname">
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="lastname">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>