<?php
$host = 'localhost';
$dbname = 'portfolio_db';
$username = 'root';
$password = 'kentrell8102';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);

    $sql = "INSERT INTO contacts (name, email, phone, submission_date) VALUES ('$name', '$email', '$phone', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Submitted successfully'); window.location.href='/portfolio';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.location.href='/portfolio';</script>";
    }
}

$conn->close();
?>
