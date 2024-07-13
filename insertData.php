<?php 
require('connect.php');
global $connect;
if (!$connect) { 
    die("Connection failed: " . mysqli_connect_error()); 
} 

echo "Database connection is OK<br>"; 
date_default_timezone_set('Asia/Jakarta');

if(isset($_POST["temperature"]) && isset($_POST["humidity"]) && isset($_POST["sensor"]) && isset($_POST["gas"])) {
    $s = $_POST["sensor"];
    $t = $_POST["temperature"];
    $h = $_POST["humidity"];
    $gas = $_POST['gas'];
    $waktu = date("Y-m-d H:i:s");

    $stmt = $connect->prepare("INSERT INTO esp32_record (suhu, kelembapan, sensor, gas, waktu) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("dddds", $t, $h, $s, $gas, $waktu);

    if ($stmt->execute()) { 
        echo "\nNew record created successfully"; 
    } else { 
        echo "Error: " . $stmt->error; 
    }
    $stmt->close();
} else {
    echo "Missing required POST data";
}

$connect->close();
?>