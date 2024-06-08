<?php
require_once 'database.php'; // Connect to the database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and assign to variables
    $id = $_POST["id"];
    $name = $_POST["name"];
    $year = $_POST["year"];
    $brand = $_POST["brand"];
    $body = $_POST["body"];
    $cond = $_POST["cond"];
    $fuel = $_POST["fuel"];
    $price = $_POST["price"];
    try {
        // Prepare and execute the SQL statement to insert a new car record
        $stmt = $pdo->prepare("INSERT INTO cars (name, year, brand, body, cond, fuel, price) VALUES (:name, :year, :brand, :body, :cond, :fuel, :price)");
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':brand', $brand);
        $stmt->bindParam(':body', $body);
        $stmt->bindParam(':cond', $cond);
        $stmt->bindParam(':fuel', $fuel);
        $stmt->bindParam(':price', $price);

        $stmt->execute();

        // Redirect to the AddCar.php page after successful insertion
        header("Location: AddCar.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage(); // Handle potential database errors
    }
}
?>
