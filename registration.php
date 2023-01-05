<?php 
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partical/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body style="  background-image: url('img_tree.gif'), url('paper.gif');">
    <?php 
if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>success!</strong> Your account now created and you can login.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '. $showError .'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
   
    <div>
        <div class="container border my-5" style="width:40%;background-color: lightblue;">
            <h1 style="color:green">Create Profile</h1>
            <form action="/theschoolsocial/registration.php" method="post" onsubmit="return validateForm()">

                <!-- Enter first name -->
                <td> User Name* </td>
                <input key="username" type="text" id="username" value="" name="username">
                <span id="blankMsg" style="color:red"> </span> <br><br>


                <!-- Create a new password -->
                <td> Create Password* </td>
                <input type="password" id="password" value="" name="password">
                <span id="message1" style="color:red"> </span> <br><br>

                <!-- <!?Enter confirm password -->
                <td> Confirm Password* </td>
                <input type="cpassword" id="cpassword" value="" name="cpassword">
                <span id="message2" style="color:red"> </span> <br><br>

                <!-- Click to verify valid password -->
                <input type="submit" value="Submit">

                <!-- Click to reset fields -->
                <input type="reset" value="Reset"></input>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>