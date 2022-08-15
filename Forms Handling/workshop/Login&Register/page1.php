<?php
session_start();
require('connectDB.php');
// if shothand
$_SESSION['auth'] === null ? JS::goTo('login.php') : "";
// full if
// if ($_SESSION['auth'] === null) {
//     //ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง
//     echo "<script>";
//     echo "window.location.href = 'login.html'";
//     echo "</script>";
// }
echo "<h1>เข้าสู่ระบบเท่านั้นจึงสามารถเข้าหน้านี้ได้</h1>";
echo "<a href='login.php'>ออกจากระบบ</a>";