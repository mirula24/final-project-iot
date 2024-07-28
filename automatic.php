<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require('connect.php');

$sensor = isset($_GET['sensor']) ? intval($_GET['sensor']) : 1;

$sql = mysqli_query($connect, "SELECT kelembapan, suhu, gas FROM real_time WHERE sensor = $sensor ORDER BY id DESC limit 1 ");
$result = mysqli_fetch_assoc($sql);

echo json_encode($result);
