<?php

// Hubungkan ke database
$server = "localhost";
$username = "root";
$password = "";
$database = '127_zhaqian';

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// Tangkap data dari form
$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];

// Hindari SQL Injection
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$comment = mysqli_real_escape_string($conn, $comment);

// Masukkan data ke database
$sql = "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Komentar berhasil dikirim.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
header("Location: " . $_SERVER["HTTP_REFERER"]);
exit;
