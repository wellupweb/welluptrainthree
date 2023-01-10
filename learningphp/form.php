<?php 
    $firstname = $lastname = $email = $website = $comment = $image= "";
    $errfirstname = $errlastname = $erremail = $errwebsite = "";

  

    if($_SERVER["REQUEST_METHOD"] ==  "POST"){
        if(empty($_POST['firstname'])){
            $errfirstname = "<div class='alert alert-danger' role='alert'>First Name Required!!</div>";
        }else{
            $firstname = validate($_POST['firstname']) ;
        }

        if(empty($_POST['lastname'])){
            $errlastname = "<div class='alert alert-danger' role='alert'>Last Name Required!!</div>";
        }else{
            $lastname = validate($_POST['lastname']);
        }

        if(empty($_POST['email'])){
            $erremail = "<div class='alert alert-danger' role='alert'>Email Required!!</div>";
        }else{
            $email = validate($_POST['email']);
        }

        if(empty($_POST['website'])){
            $errwebsite = "<div class='alert alert-danger' role='alert'>Website Required!!</div>";
        }else{
            $website = validate($_POST['website']);
        }

        $comment = validate($_POST['comment']);

        $image_name = $_FILES['wellupimage']['name'];
        $tmp_name = $_FILES['wellupimage']['tmp_name'];
        $image = "image/".$image_name;
        move_uploaded_file($tmp_name,$image);
        echo "File upload successfullly";
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

            <li class="list-group-item">Image : <img src="<?php echo $image; ?>" alt=""> </li>
        </ul>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" id="firstname">
                <?php echo $errfirstname; ?>
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name &copy;</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
                <?php echo $errlastname; ?>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
                <?php echo $erremail; ?>
            </div>

            <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="text" class="form-control" name="website" id="website">
                <?php echo $errwebsite; ?>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="wellupimage" id="">
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