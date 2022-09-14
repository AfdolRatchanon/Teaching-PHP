<?php
     $score = 50;
     $grade = $score > 49 ? "ผ่าน" : "ตก";
     echo "คะแนน $score คุณสอบ $grade";
     
     echo "<br/>";

     $auth = $login ?? "ไม่ระบุนาม";
     echo "คุณชื่อ $auth";
?>