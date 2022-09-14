<?php
require("connect.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$user = $_POST['user'];
$pass = $_POST['pass'];

// echo $fname . $lname . $user . $pass;

$sql = "INSERT INTO tbl_member 
(mem_fname, mem_lname, mem_user, mem_pass)VALUES
('$fname', '$lname', '$user', '$pass')";

//สำคัญ
// mysqli_query($conn, $sql);

// !ไม่สำคัญ ตรวจสอบสถานะการสมัครสมาชิกแล้วเปลี่ยนไปหน้า frmLogin.html
if (mysqli_query($conn, $sql)) {
    echo "<script>";
    echo "alert('สมัครสมาชิกสำเร็จ');";
    echo "window.location.href = 'frmLogin.html';";
    echo "</script>";
}