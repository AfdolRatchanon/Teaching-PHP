<?php
// error_reporting(E_ALL);

//เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect("localhost", "root", "", "student");

//ตรวจสอบการเชื่อมต่อฐานข้อมูล
if (!$conn) {
    echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้" . mysqli_connect_error();
}

class JS
{
    public static function goTo($page)
    {
        echo "<script>window.location.href = '$page'</script>";
    }
    public static function alert($str)
    {
        echo "<script>alert('$str')</script>";
    }
}