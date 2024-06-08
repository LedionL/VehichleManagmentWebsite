<?php
// Start the session and check if user is already logged in, if so redirect to user homepage
session_start();
if(isset($_SESSION["user_id"])){
    header("Location: indexuser.php");
    exit();
}

$isInvalid = false;
$errorMessage = "";
$success = false;

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once __DIR__ . "/database.php";  // Include database connection

    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  // Validate email format
        $isInvalid = true;
        $errorMessage = "Enter a valid email.";
    } else {
        try {
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $stmt = $pdo->prepare("SELECT * FROM user WHERE email = ?");  // Prepare SQL statement
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verify user and password
            if ($user && password_verify($_POST["password"], $user["password_hash"])) {
                $_SESSION["user_id"] = $user["id"];
                $success = true;
            } else {
                $isInvalid = true;
                $errorMessage = "Incorrect email or password.";
            }
        } catch (PDOException $e) {  // Handle potential database errors
            $isInvalid = true;
            $errorMessage = "Error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        .container {
            margin: 0 auto;
            padding-top: 50px;
            max-width: 400px;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>
    <div class="container" style="padding-left: 205px;">
        <h1>Log in</h1>

        <!-- Display error message if login fails -->
        <?php if ($isInvalid): ?>
            <em class="error"><?php echo $errorMessage; ?></em>
        <?php endif; ?>

        <!-- Display success message and redirect if login succeeds -->
        <?php if ($success): ?>
            <em class="success">Logged in successfully!</em>
            <script>
                setTimeout(function() {
                    window.location.href = 'indexuser.php';
                }, 900);
            </script>
        <?php endif; ?>

        <!-- Login form -->
        <form method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Log in</button>
        </form>
        <br>
        <h4>Don't have an account? <a href="https://localhost/soloproj/signup.php">Sign up!</a></h4>
    </div>
</body>
</html>
