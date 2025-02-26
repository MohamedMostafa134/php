
<?php
$message = "";


    if (isset($_POST['register'])) {
        $show = true;
        $username = $_POST['reg_username'];
        $email = $_POST['email'];
        $password = $_POST['reg_password'];

        if (empty($username) || empty($email) || empty($password)) {
            $message = "All fields are required";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = "Invalid email format";
        } else {
            $message = "Registration successful";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container col-md-6">
    <h2 class="text-center">Registration Form</h2>
    <form method="POST" class="mb-4">
        <div class="mb-3">

            <input type="text" name="reg_username" placeholder="Enter UserName" class="form-control" required>
        </div>
        <div class="mb-3">

            <input type="email" name="email" placeholder="Enter Email" class="form-control" required>
        </div>
        <div class="mb-3">
            
            <input type="password" name="reg_password" placeholder="Enter password" class="form-control" required>
        </div>
        <button type="submit" name="register" class="btn btn-success">Register</button>
    </form>

    <p class="text-center mt-4 text-danger fw-bold"> <?php echo $message; ?> </p>

</body>
</html>


