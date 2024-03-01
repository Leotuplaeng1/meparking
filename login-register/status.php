<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// สร้าง SQL statements สำหรับอัปเดตข้อมูล
$sql = "";

// รับค่าที่ส่งมาจาก URL
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าที่ส่งมาทาง POST
    $status11 = $_POST["status11"];
    $status12 = $_POST["status12"];
    $status13 = $_POST["status13"];
    $status21 = $_POST["status21"];
    $status22 = $_POST["status22"];
    $status23 = $_POST["status23"];
    $status31 = $_POST["status31"];
    $status32 = $_POST["status32"];
    $status33 = $_POST["status33"];



// เพิ่มเงื่อนไขสำหรับแต่ละ ID และ status
if ($status11 == "empty") {
    $sql .= "UPDATE statuscar SET status='$status11', time=NOW() WHERE id=11;";
} else {
    $sql .= "UPDATE statuscar SET status='$status11' WHERE id=11;";
}

if ($status12 == "empty") {
    $sql .= "UPDATE statuscar SET status='$status12', time=NOW() WHERE id=12;";
} else {
    $sql .= "UPDATE statuscar SET status='$status12' WHERE id=12;";
}

if ($status13 == "empty") {
    $sql .= "UPDATE statuscar SET status='$status13', time=NOW() WHERE id=13;";
} else {
    $sql .= "UPDATE statuscar SET status='$status13' WHERE id=13;";
}

if ($status21 == "empty") {
    $sql .= "UPDATE statuscar SET status='$status21', time=NOW() WHERE id=21;";
} else {
    $sql .= "UPDATE statuscar SET status='$status21' WHERE id=21;";
}

if ($status22 == "empty") {
    $sql .= "UPDATE statuscar SET status='$status22', time=NOW() WHERE id=22;";
} else {
    $sql .= "UPDATE statuscar SET status='$status22' WHERE id=22;";
}

if ($status23 == "empty") {
    $sql .= "UPDATE statuscar SET status='$status23', time=NOW() WHERE id=23;";
} else {
    $sql .= "UPDATE statuscar SET status='$status23' WHERE id=23;";
}

if ($status31 == "empty") {
    $sql .= "UPDATE statuscar SET status='$status31', time=NOW() WHERE id=31;";
} else {
    $sql .= "UPDATE statuscar SET status='$status31'  WHERE id=31;";
}

if ($status32 == "empty") {
    $sql .= "UPDATE statuscar SET status='$status32', time=NOW() WHERE id=32;";
} else {
    $sql .= "UPDATE statuscar SET status='$status32' WHERE id=32;";
}

if ($status33 == "empty") {
    $sql .= "UPDATE statuscar SET status='$status33', time=NOW() WHERE id=33;";
} else {
    $sql .= "UPDATE statuscar SET status='$status33'  WHERE id=33;";
}

// สั่งให้ฐานข้อมูลประมวลผล SQL statements
if ($conn->multi_query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}}

$conn->close();
?>
