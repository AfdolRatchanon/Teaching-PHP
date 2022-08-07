<?php
// error_reporting(E_ALL);

//เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect("localhost", "root", "", "student", 3306);

//ตรวจสอบการเชื่อมต่อฐานข้อมูล
if (!$conn) {
    echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้" . mysqli_connect_error();
}