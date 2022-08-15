<?php
//ทำลายเซสชันที่มีทั้งหมด
session_destroy();
//เริ่มใช้งานคำสั่งเซสชัน
session_start();
//เชื่อมต่อฐานข้อมูล
require('connectDB.php');
//รัปข้อมูลจาก frmLogin 
$user = $_POST['user'];
$pass = $_POST['pass'];
//คำสั่งดึงข้อมูลสมาชิกโดยตรวจสอบ username และ password
$sql = "SELECT id, firstname, lastname, username 
FROM tbl_student 
WHERE username = '$user' AND password = '$pass'";
//ดึงข้อมูลมาเก็บไว้ที่ตัวแปร $result
$result = mysqli_query($conn, $sql);
//ปล่อยข้อมูลออกมาเก็บไว้ที่ตัวแปร $auth
$_SESSION['auth'] = mysqli_fetch_assoc($result);
//เงื่อนไขถ้าตัวแปร $auth เป็นค่าว่าง (null)
if ($_SESSION['auth'] === null) {
    //ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง
    JS::alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
    JS::goTo('frmlogin.html');
} else {
    //เข้าสู่ระบบแล้ว
    JS::alert('เข้าสู่ระบบสำเร็จ');
    js::goTo('page1.php');
}

// //เงื่อนไขถ้าตัวแปร $auth เป็นค่าว่าง (null)
// if ($_SESSION['auth'] === null) {
//     //ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง
//     echo "<script>";
//     echo "alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');";
//     echo "window.location.href = 'frmlogin.html'";
//     echo "</script>";
// } else {
//     //เข้าสู่ระบบแล้ว
//     echo "<script>";
//     echo "alert('เข้าสู่ระบบสำเร็จ');";
//     echo "window.location.href = 'page1.php'";
//     echo "</script>";
// }







// // ปล่อยข้อมูลออกมาเก็บไว้ที่ตัวแปร $auth
// $auth = mysqli_fetch_assoc($result);

// if ($auth === null) {
//     echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
// } else {
//     echo "เข้าสู่ระบบสำเร็จ";
// }