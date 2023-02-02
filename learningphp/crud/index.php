<?php
$link = new mysqli("localhost", "root", "", "scholify");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];

    $insert_row = $link->query("insert into student(firstname,lastname) values('$firstname','$lastname')");
    if ($insert_row) {
        echo "Data inserted Successfully";
    }
}

$table_data = $link->query("select * from student");

echo "<pre>";
// $stu = $table_data->fetch_all();
// var_dump($stu[5][1]);
echo "<br>";
// var_dump($table_data->fetch_array());
// echo "<br>";
// $stu = $table_data->fetch_assoc();
// var_dump($stu['firstname']);

// var_dump($table_data->fetch_assoc());
// var_dump($table_data->fetch_assoc());
// var_dump($table_data->fetch_assoc());
// var_dump($table_data->fetch_assoc());
// var_dump($table_data->fetch_assoc());
// var_dump($table_data->fetch_assoc());
// var_dump($table_data->fetch_assoc());
echo "</pre>";

// die();



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

        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 0;
                while($result = $table_data->fetch_assoc()) { 
                $i++;    
                ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['firstname']; ?></td>
                    <td><?php echo $result['lastname']; ?></td>
                    <td>
                        <a href="edit.php?student_id=<?php echo $result['id'];  ?>" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>