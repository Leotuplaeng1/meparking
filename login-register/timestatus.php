<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Display</title>
    <link rel="stylesheet" href="../css/style1test.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt:wght@100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  
</head>
<body>
<div class="status">
<h2>Status Display</h2>
</div>
<table>
    <tr>
        <th>Parking lot ID</th>
        <th>Zone Name</th>
        <th>Status</th>
        <th>Time</th>
    </tr>

<?php
// เชื่อมต่อฐานข้อมูล
session_start();
include('server.php');

// สร้าง SQL เพื่อดึงข้อมูล
$sql = "SELECT id, zonename, status, time FROM statusCar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // แสดงข้อมูลในตาราง
    while($row = $result->fetch_assoc()) {
        // กำหนดคลาส CSS ของแถวโดยอ้างอิงจากสถานะของ status
        $rowClass = ($row["status"] == "empty") ? "empty" : "full";
        
        // แสดงข้อมูลในแต่ละแถวของตารางโดยใช้คลาส CSS ที่กำหนดไว้
        echo "<tr class='$rowClass'>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["zonename"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "<td>" . $row["time"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>

<nav class="nav">
        <a href="home.html" class="nav__link ">
          <i class="bi bi-house"></i>
          <span class="nav__text">Home</span>
        </a>
        <a href="select_zone.html" class="nav__link">
          <i class="bi bi-geo-alt-fill"></i>
          <span class="nav__text">Location</span>
        </a>
        <a href="timestatus.php" class="nav__link">
          <i class="bi bi-p-circle"></i>
          <span class="nav__text">Parking Info</span>
        </a>
        <a href="user.php" class="nav__link">
          <i class="bi bi-person-fill"></i>
          <span class="nav__text">Profile</span>
        </a>
      </nav>
    

<script src="../js/mep.js"></script>
</body>
</html>
