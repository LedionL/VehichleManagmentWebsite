<?php
// Include the database connection file
require_once 'database.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the car ID from the POST data
    $id = $_POST["id"];

    // Prepare and execute the SQL statement to delete the car with the given ID
    $stmt = $pdo->prepare("DELETE FROM cars WHERE id = ?");
    $stmt->execute([$id]);

    // Check if the deletion was successful
    if ($stmt->rowCount() > 0) {
        echo json_encode(["success" => true]); // Return success response
    } else {
        echo json_encode(["success" => false, "error" => "Failed to delete car data"]); // Return error response
    }
} else {
    echo json_encode(["success" => false, "error" => "Invalid request method"]); // Return error response for invalid request method
}
?>
