<?php
$predefined_password = "123";
$message = "";


    if (isset($_POST['change_password'])) {
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
            $message = "All fields are required";
        } elseif ($current_password != $predefined_password) {
            $message = "Incorrect current password";
        } elseif ($new_password != $confirm_password) {
            $message = "New password does not match";
        } else {
            $message = "Password changed successfully";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container col-md-6">
    <h2 class="text-center">Change Password Form</h2>
    <form method="POST">
        <div class="mb-3">
            
            <input type="password" name="current_password" placeholder="Enter Current password" class="form-control" required>
        </div>
        <div class="mb-3">
            
            <input type="password" name="new_password" placeholder="New password" class="form-control" required>
        </div>
        <div class="mb-3">
            
            <input type="password" name="confirm_password" placeholder="Confirm New password" class="form-control" required>
        </div>
        <button type="submit" name="change_password" class="btn btn-warning">Change Password</button>
    </form>

    <p class="text-center mt-4 text-danger fw-bold"> <?php echo $message; ?> </p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
