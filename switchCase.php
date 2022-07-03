<?php
     $x = 10;
     $y = 5;
     $str = "-";
     switch ($str){
          case "+":
               echo "$x + $y = ".$x+$y;
               break;
          case "-":
               echo "$x - $y = ".$x-$y;
               break;
          default:
               echo "กรุณาเลือกเครื่องหมายที่ถูกต้องคือ + และ - เท่านั้น";
     }
?>