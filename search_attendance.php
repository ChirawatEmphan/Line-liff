<?php
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// สร้างการเชื่อมต่อกับฐานข้อมูล
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}

// รับข้อมูลการค้นหาจากฟอร์ม
$searchName = $_GET['searchName'];

// เตรียมคำสั่ง SQL สำหรับค้นหาข้อมูล
$sql = "SELECT user_name, attendance_time FROM attendance WHERE user_name LIKE ?";
$stmt = $conn->prepare($sql);
$searchPattern = "%".$searchName."%";
$stmt->bind_param("s", $searchPattern);

// ดำเนินการคำสั่ง SQL
$stmt->execute();
$result = $stmt->get_result();

// แสดงผลลัพธ์การค้นหา
if ($result->num_rows > 0) {
    echo "<h2>ผลลัพธ์การค้นหา:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ชื่อผู้ใช้งาน</th><th>เวลาเข้าเรียน</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row['user_name']) . "</td><td>" . htmlspecialchars($row['attendance_time']) . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "ไม่พบข้อมูล";
}

// ปิดการเชื่อมต่อ
$stmt->close();
$conn->close();
?>
