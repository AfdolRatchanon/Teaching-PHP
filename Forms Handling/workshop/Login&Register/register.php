<?php

//รับข้อมูลที่ส่งมาจากฟอร์มด้วยวิธีการส่งแบบ POST
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$user = $_POST['user'];
$pass = $_POST['pass'];

//เรียกไฟล์ connectDB ที่มีตัวแปร $conn เพื่อไม่ต้องเขียนซ้ำหลายรอบ
require_once('connectDB.php');

//ภาษา SQL ใช้ในการบันทึกข้อมูลลงฐานข้อมูล
$sql = "INSERT INTO `tbl_student`
(`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(NULL, '$fname', '$lname', '$user', '$pass');";

//ตรวจสอบการบันทึกข้อมูลเข้าฐานข้อมูล
if (mysqli_query($conn, $sql)) {
    echo "สมัครสมาชิกสำเร็จ";
} else {
    echo "เกิดข้อผิดพลาดไม่สามารถสมัครสมาชิกได้" . mysqli_error($conn);
}

if (isset($_POST['fname']) && isset($_POST['fname']) && isset($_POST['fname']) && isset($_POST['fname'])) {
    if (mysqli_query($conn, $sql)) {
        echo "สมัครสมาชิกสำเร็จ";
    } else {
        echo "เกิดข้อผิดพลาดไม่สามารถสมัครสมาชิกได้" . mysqli_error($conn);
    }
}