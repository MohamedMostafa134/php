

<?php
$predefined_username = "mohamed";
$predefined_password = "123";
$message = "";


    if (isset($_POST['login'])) {
      
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == $predefined_username && $password == $predefined_password) {
            $message = "Welcome to the website";
        } else {
            $message = "Incorrect credentials, please try again";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container col-md-6">
    <h2 class="text-center">Login Form</h2>
    <form method="POST" >
        <div class="mb-3">
       
            <input type="text" name="username" placeholder="Enter username" class="form-control" required>
        </div>
        <div class="mb-3">
           
            <input type="password" name="password" placeholder="Enter password" class="form-control" required>
        </div>
        <button type="submit" name="login" class="btn btn-primary">Login</button>
    </form>
    
    <?php echo $message; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script></body>
</html>


