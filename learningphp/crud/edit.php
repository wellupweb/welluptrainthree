<?php
// $country = array("thename" => "Arman");
// if(isset($country['name'])){
    
// }
$link = new mysqli("localhost", "root", "", "scholify");
if(isset($_GET['student_id'])){
    $student_id = $_GET['student_id'];
    $table_row = $link->query("select * from student where id = $student_id");
    $result = $table_row->fetch_assoc();
 }
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $student_id = $_POST["student_id"];

    $update_row = $link->query("update student set firstname = '$firstname', lastname = '$lastname' where id = $student_id ");
    if ($update_row) {
        header("Location: edit.php?student_id=$student_id");
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

            <input type="hidden" name="student_id" value="<?php echo $result['id']; ?>">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo $result['firstname']; ?>">
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo $result['lastname']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>