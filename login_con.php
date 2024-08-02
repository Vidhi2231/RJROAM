<?php

$name = isset($_POST["lname"]) ? $_POST["lname"] : "";
$password = isset($_POST["lpassword"]) ? $_POST["lpassword"] : "";

$host = "localhost";
$dbname = "rjroam";
$username = "root";
$db_password = " "; // Remove the extra space

$conn = mysqli_connect($host, $username, $db_password, $dbname);

if (mysqli_connect_errno()) {
    echo "failed";
    die("Connection error: " . mysqli_connect_error());
}

$sql = "SELECT * FROM register WHERE name = ? AND password = ?";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ss", $name, $password);

if (mysqli_stmt_execute($stmt)) {
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) == 1) {
        // Redirect to home.html upon successful login
        header("Location: index.php");
        exit(); // Ensure script stops here to prevent further execution
    } else {
        echo "Invalid email or password.";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
