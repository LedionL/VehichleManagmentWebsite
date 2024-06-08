<?php
//page used to connect to the MySQL database using PDO
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'projdb';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>