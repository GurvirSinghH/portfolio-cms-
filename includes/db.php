<?php
$host = 'localhost';
$db = 'portfolio';
$user = 'root';
$pass = 'Ganesar27@#'; // (leave empty if you haven't set a password)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
