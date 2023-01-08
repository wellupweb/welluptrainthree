<?php 
    $firstname = "";
    $lastname = "";
    $email = "";
    $website = "";
    $comment = "";
    if($_SERVER["REQUEST_METHOD"] ==  "POST"){
        $firstname = validate($_POST['firstname']) ;
        $lastname = validate($_POST['lastname']);
        $email = validate($_POST['email']);
        $website = validate($_POST['website']);
        $comment = validate($_POST['comment']);
    }

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h2 class="text-center bg-warning text-white p-3">Form Submission</h2>


        <ul class="list-group">
            <li class="list-group-item">First Name : <?php echo $firstname;  ?> </li>
            <li class="list-group-item">Last Name : <?php  echo $lastname; ?></li>
            <li class="list-group-item">Email : <?php echo $email;  ?> </li>
            <li class="list-group-item">Website : <?php echo $website; ?> </li>
            <li class="list-group-item">Comment : <?php  echo $comment; ?> </li>
        </ul>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" id="firstname">
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name &copy;</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>

            <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="text" class="form-control" name="website" id="website">
            </div>

            <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>