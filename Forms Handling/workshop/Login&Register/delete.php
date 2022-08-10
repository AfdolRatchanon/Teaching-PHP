<?php
//เรียกไฟล์ connectDB.php เพื่อใช้ตัวแปร $conn
require('connectDB.php');

//รับข้อมูลจาก URL parameters
$id = $_GET['id'];

//คำสั่งภาษา SQL เพื่อลบช้อมูลจากฐานข้อมูล
$sql = "DELETE FROM tbl_student WHERE id = $id";

//ตรวจสอบการลบช้อมูลสำเร็จหรือไม่
if (mysqli_query($conn, $sql)) {
    //ถ้าลบสำเร็จให้เปลี่ยนเส้นทางไปหน้า select.php
    JS::goTo('select.php');
}

//ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);