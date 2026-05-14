<?php
session_start();

// Define your secure password
$correct_password = "DilnethAdmin@2026"; 
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_password = $_POST['password'];

    if ($entered_password === $correct_password) {
        // Set a session variable to verify the user is logged in
        $_SESSION['loggedin'] = true;
        header("Location: admin.php"); // Redirect to the admin page
        exit;
    } else {
        $error = "Incorrect password. Access Denied.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login | Dilneth Global</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #006400; height: 100vh; display: flex; align-items: center; justify-content: center; }
        .login-box { background-color: rgba(255, 255, 255, 0.1); padding: 40px; border-radius: 15px; width: 100%; max-width: 400px; text-align: center; }
        .btn-gold { background-color: #FFD700; color: #000; font-weight: bold; width: 100%; height: 50px; }
        .btn-gold:hover { background-color: #e6c200; }
    </style>
</head>
<body>

    <div class="login-box">
        <h2 class="text-white mb-4 fw-light">ADMIN LOGIN</h2>
        
        <form method="POST" action="login.php">
            <div class="mb-3">
                <input type="password" name="password" class="form-control text-center" placeholder="Enter Password" required>
            </div>
            <button type="submit" class="btn btn-gold">ENTER</button>
        </form>

        <?php if ($error): ?>
            <div class="text-warning mt-3 small"><?php echo $error; ?></div>
        <?php endif; ?>
    </div>

</body>
</html>