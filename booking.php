<?php

$namee = isset($_POST["name"]) ? $_POST["name"] : "";
$emaill = isset($_POST["email"]) ? $_POST["email"] : "";
$phonee = isset($_POST["phone"]) ? $_POST["phone"] : "";
$addresss = isset($_POST["address"]) ? $_POST["address"] : "";
$locationn = isset($_POST["location"]) ? $_POST["location"] : "";
$guestss = isset($_POST["guests"]) ? $_POST["guests"] : "";
$leave = isset($_POST["leaving"]) ? $_POST["leaving"] : "";
$arive = isset($_POST["arrivals"]) ? $_POST["arrivals"] : "";

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

$sql = "INSERT INTO booking (name, email, phone,address,location,guest,arrivals,leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssssss", $namee, $emaill, $phonee,$addresss, $locationn, $guestss,$arive,$leave);

if (mysqli_stmt_execute($stmt)) {
    header("Location: payment.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);


?>
