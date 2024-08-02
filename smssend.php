<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone='91'.$_POST['phone'];
    $message=$_POST['message'];


$apiKey = urlencode('MzU1MDc2NTI2NTQ4NDg3MzZkNGU3MDRlMzg3NTM2Njc=');
// Message details
$numbers = array($phone);
$sender = urlencode(‘TXTLCL’);
$message = rawurlencode($message);
 
$numbers = implode(‘,’, $numbers);
 
// Prepare data for POST request
$data = array(‘apikey’ => $apiKey, ‘numbers’ => $numbers, “sender” => $sender, “message” => $message);
// Send the POST request with cURL
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    // Print response
    echo $response;
}
// Close cURL session
curl_close($ch);
// Process your response here
echo $response;
}
?>