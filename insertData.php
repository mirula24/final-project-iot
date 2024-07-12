<?php 
require('connect.php');
global $connect;
if (!$connect) { 
	die("Connection failed: " . mysqli_connect_error()); 
} 

echo "Database connection is OK<br>"; 

if(isset($_POST["temperature"]) && isset($_POST["humidity"]) && isset($_POST["sensor"])) {
    $s = $_POST["sensor"];
	$t = $_POST["temperature"];
	$h = $_POST["humidity"];
    $gas = $_POST['gas'];
    $waktu = date("Y-m-d H:i:s");

	$sql = "INSERT INTO esp32_record (suhu, kelembapan,sensor,gas,waktu) VALUES (".$t.", ".$h.",".$s.",".$gas.",".$waktu.")"; 

	if (mysqli_query($connect, $sql)) { 
		echo "\nNew record created successfully"; 
	} else { 
		echo "Error: " . $sql . "<br>" . mysqli_error($connect); 
	}
    return mysqli_query($connect, $sql);
}

?>