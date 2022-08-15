<?php
require('connect.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "SELECT mem_id, mem_fname, mem_lname, mem_user 
FROM tbl_member
WHERE mem_user = '$user' AND mem_pass = '$pass'";

$result = mysqli_query($conn, $sql);

$auth = mysqli_fetch_assoc($result);

if ($auth == null) {
    echo "ชื่อผู้ใช้ หรือ รหัสผ่านผิด";
} else {
    echo "เข้าสู่ระบบสำเร็จ";
}