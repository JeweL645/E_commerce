<?php
try {
    $conn = new PDO("mysql:host=localhost;port=3306;dbname=dbms_prac", "root", "");
    // Set PDO to throw exceptions on errors
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Handle connection errors
    die("Connection failed: " . $e->getMessage());
}
?>

