<?php
require('connect.php');
global $connect;
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database connection is OK<br>";
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST["temperature"]) && isset($_POST["humidity"]) && isset($_POST["sensor"]) && isset($_POST["gas"])) {
    $s = $_POST["sensor"];
    $t = $_POST["temperature"];
    $h = $_POST["humidity"];
    $gas = $_POST['gas'];
    $waktu = date("Y-m-d H:i:s");


    $rt = $connect->prepare("UPDATE real_time SET suhu=?, kelembapan=?, gas=?, waktu=? WHERE sensor=?");
    $rt->bind_param("dddsd", $t, $h, $gas, $waktu, $s);
    $rt->execute();

    // Insert into esp32_record every 30 minutes
    $check_time = date("Y-m-d H:i:s", strtotime("-30 minutes"));
    $stmt_check = $connect->prepare("SELECT waktu FROM esp32_record WHERE sensor=? ORDER BY id DESC LIMIT 1");
    $stmt_check->bind_param("d", $s);
    $stmt_check->execute();
    $result = $stmt_check->get_result();
    $last_time = $result->fetch_assoc();

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
