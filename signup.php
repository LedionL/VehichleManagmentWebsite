<?php
session_start();
// Redirect user to indexuser.php if already logged in
if(isset($_SESSION["user_id"])){
    header("Location: indexuser.php");
    exit();
}

$errorMessage = ""; // Variable to store error messages
$successMessage = ""; // Variable to store success messages

// Process form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate form data
    if (empty($_POST["name"])) {
        $errorMessage = "You have not entered a name.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Please enter a valid email.";
    } elseif (strlen($_POST["password"]) < 8) {
        $errorMessage = "Your password is too short. It must be at least 8 characters.";
    } elseif (!preg_match("/[a-z]/i", $_POST["password"])) {
        $errorMessage = "Password must contain at least one letter.";
    } elseif (!preg_match("/[0-9]/", $_POST["password"])) {
        $errorMessage = "Password must contain at least one number.";
    } else {
        require_once __DIR__ . "/database.php"; // Include database connection

        try {
            // Hash the password for security
            $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO user (name, email, password_hash) VALUES (?, ?, ?)");

            if (!$stmt) {
                $errorMessage = "Database error: Unable to prepare statement.";
            } else {
                // Execute the prepared statement to insert user data
                $stmt->execute([$_POST["name"], $_POST["email"], $password_hash]);
                $successMessage = "You have signed up successfully.";
                // Redirect to login page after successful signup
                echo '<script>
                        setTimeout(function() {
                            window.location.href = "login.php";
                        }, 900);
                      </script>';
            }
        } catch (PDOException $e) {
            // Handle database errors
            if ($e->errorInfo[1] === 1062) {
                $errorMessage = "The email is already in use.";
            } else {
                $errorMessage = "Database error: " . $e->getMessage();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
    <div style="padding-top: 50px; padding-left: 295px;">
        <form action="" method="post" novalidate>
            <h1>Sign Up</h1>
            <?php if (!empty($errorMessage)): ?>
                <p class="error"><?php echo $errorMessage; ?></p>
            <?php endif; ?>
            <?php if (!empty($successMessage)): ?>
                <p class="success"><?php echo $successMessage; ?></p>
            <?php endif; ?>
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($_POST["name"] ?? ''); ?>" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_POST["email"] ?? ''); ?>" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>
        <br>
        <h4>Already have an account? <a href="https://localhost/soloproj/login.php">Log in!</a></h4>
    </div>
</body>
</html>
