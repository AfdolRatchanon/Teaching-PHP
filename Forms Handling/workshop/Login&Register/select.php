<?php
//เรียกไฟล์ connectDB.php เพื่อใช้ตัวแปร $conn
require('connectDB.php');

//ตัวแปร $sql เก็บคำสั่งภาษา SQL เพื่อดึงข้อมูลจากฐานข้อมูล
$sql = "SELECT * FROM tbl_student";
//นำผลลัพธ์จาก mysqli_query() เก็บลงตัวแปร $result
$result = mysqli_query($conn, $sql);

//mysqli_fetch_assoc() ใช้ปล่อยช้อมูลทีละ 1 แถวแบบ Associative Array
while ($row = mysqli_fetch_assoc($result)) {
    // print_r($row);
    echo $row['id'] . " " . $row['firstname'] . " " . $row['lastname'];
    echo " " . "<a href='delete.php?id=" . $row['id'] . "'>ลบข้อมูล</a>";
    echo "<br />";
}

//ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);