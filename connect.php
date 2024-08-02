<?php

$namee = isset($_POST["name1"]) ? $_POST["name1"] : "";
$emaill = isset($_POST["email1"]) ? $_POST["email1"] : "";
$passwordd = isset($_POST["password1"]) ? $_POST["password1"] : "";

$host = "localhost";
$dbname = "rjroam";
$username = "root";
$db_password = " "; // Remove the extra space

$conn = mysqli_connect($host, $username, $db_password, $dbname);

if (mysqli_connect_errno()) {
    echo "failed";
    die("Connection error: " . mysqli_connect_error());
}
echo "inserted";

$sql = "INSERT INTO register (name, email, password) VALUES (?, ?, ?)";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sss", $namee, $emaill, $passwordd);

if (mysqli_stmt_execute($stmt)) {
    echo "Record saved.";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);


?>
