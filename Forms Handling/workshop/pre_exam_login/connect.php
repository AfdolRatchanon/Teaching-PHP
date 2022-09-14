<?php

$conn = mysqli_connect('localhost', 'root', '', 'system_login');

// !ไม่สำคัญ ใช้สำหรับตรวจสอบการเชื่อมต่อฐานข้อมูล
if (!$conn) {
    die("เกิดข้อผิดพลาดในการเชื่อมต่อฐานข้อมูล" . mysqli_connect_error($conn));
}