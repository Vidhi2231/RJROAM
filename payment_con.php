<?php


$name = isset($_POST["name"]) ? $_POST["name"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$address = isset($_POST["address"]) ? $_POST["address"] : "";
$city = isset($_POST["city"]) ? $_POST["city"] : "";
$state = isset($_POST["state"]) ? $_POST["state"] : "";
$zip = isset($_POST["zip"]) ? $_POST["zip"] : "";
$cardna = isset($_POST["cardname"]) ? $_POST["cardname"] : "";
$cardno = isset($_POST["cardno"]) ? $_POST["cardno"] : "";
$expm = isset($_POST["expm"]) ? $_POST["expm"] : "";
$expy = isset($_POST["expy"]) ? $_POST["expy"] : "";
$cvv = isset($_POST["cvv"]) ? $_POST["cvv"] : "";


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

$sql = "INSERT INTO payment (name, email, address, city, state, zipcode, cardname, cardnumber, expmonth, expyear, cvv) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssssssssss", $name, $email, $address, $city, $state, $zip, $cardna, $cardno, $expm, $expy, $cvv);

if (mysqli_stmt_execute($stmt)) {
    header("Location: confirm.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);


?>
