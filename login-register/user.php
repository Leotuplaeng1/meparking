<?php 
    session_start();
    include('server.php');

    // ตรวจสอบว่ามีการล็อกอินเข้าสู่ระบบหรือไม่
    if (!isset($_SESSION['username'])) {
        header('location: login.php'); // หากยังไม่ได้ล็อกอินให้ redirect ไปยังหน้า login.php
    }

    // ดึงข้อมูลของผู้ใช้ที่ล็อกอินอยู่
    $logged_in_user = $_SESSION['username'];

    // สร้าง query เพื่อดึงข้อมูล username และ email ของผู้ใช้ที่ล็อกอิน
    $user_query = "SELECT username, email FROM user WHERE username='$logged_in_user' LIMIT 1";
    $result = mysqli_query($conn, $user_query);
    $user = mysqli_fetch_assoc($result);

    // แสดงข้อมูลบนหน้าเว็บ
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt:wght@100&display=swap" rel="stylesheet">
</head>
    <title>User Profile</title>
</head>
<body>
    <div class="account">
    <h2>Profile</h2> 
    <div class="img_account">
        <i class="bi bi-person-circle"></i>
    </div>
    <div class="username"><p>Username: <?php echo $user['username']; ?></p></div>
    <div class="email"><p>Email: <?php echo $user['email']; ?></p></div>
    <div class="btnlo"><a href="login.php"><button>Logout</button></a></div>
    <div class="contact"><p>ช่องทางการติดต่อ Email : mepmeparking@gmail.com</p></div>
    </div>

    <div class="block"></div>
      
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
