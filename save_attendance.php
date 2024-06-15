<?php
$servername = 'xxxxxxxxxxxx';
$username = 'xxxxxxxxxxxxxxx';
$password = 'xxxxxxxxxxxxx';
$dbname = 'xxxxxxxxxxxxx';

// สร้างการเชื่อมต่อกับฐานข้อมูล
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}

// รับข้อมูลจากฟอร์ม
$userName = $_POST['userName'];
$attendanceTime = $_POST['attendanceTime'];

// เตรียมคำสั่ง SQL สำหรับบันทึกข้อมูล
$sql = "INSERT INTO attendance (user_name, attendance_time) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $userName, $attendanceTime);

// ดำเนินการคำสั่ง SQL
if ($stmt->execute()) {
    echo "บันทึกข้อมูลเรียบร้อยแล้ว";
} else {
    echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . $stmt->error;
}

// ปิดการเชื่อมต่อ
$stmt->close();
$conn->close();
?>
