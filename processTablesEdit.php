<?php
// Include the database connection file
require_once 'database.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data from the POST request
    $id = $_POST["id"];
    $name = $_POST["name"];
    $year = $_POST["year"];
    $brand = $_POST["brand"];
    $body = $_POST["body"];
    $cond = $_POST["cond"];
    $fuel = $_POST["fuel"];
    $price = $_POST["price"];

    // Prepare and execute the SQL statement to update the car details
    $stmt = $pdo->prepare("UPDATE cars SET name = ?, year = ?, brand = ?, body = ?, cond = ?, fuel = ?, price = ? WHERE id = ?");
    $stmt->execute([$name, $year, $brand, $body, $cond, $fuel, $price, $id]);

    // Check if the update was successful
    if ($stmt->rowCount() > 0) {
        echo json_encode(["success" => true]); // Return success response
    } else {
        echo json_encode(["success" => false, "error" => "Failed to update car data"]); // Return error response
    }
} else {
    echo json_encode(["success" => false, "error" => "Invalid request method"]); // Return error response for invalid request method
}
?>
