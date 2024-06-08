<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php
// Validate form data
if(empty($_POST["name"])){
    die("You have not entered a name");
}

if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("Not a valid Email");
}

if(strlen($_POST["password"]) < 8){
    die("Your password is too short. It must be at least 8 characters.");
}

if(!preg_match("/[a-z]/i", $_POST["password"])){
    die("Password must contain at least one letter.");
}

if(!preg_match("/[0-9]/i", $_POST["password"])){
    die("Password must contain at least one number.");
}

// Hash the password for security
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
require_once __DIR__ . "/database.php";

// Prepare and execute the SQL query
$sql = "INSERT INTO user (name, email, password_hash) VALUES (?, ?, ?)";
$stmt = $mysqli->prepare($sql);

if(!$stmt->prepare($sql)){
    die("Error preparing SQL statement.");
}

$stmt->bind_param("sss",
                $_POST["name"],
                $_POST["email"],
                $password_hash);

// Execute the statement and handle potential errors
if($stmt->execute()) {
    header("Location: index.php");
    exit;
} else if ($mysqli->errno === 1062){
    die("The Email is already in use.");
} else {
    die($mysqli->error . " " . $mysqli->errno);
}
?>
</html>
