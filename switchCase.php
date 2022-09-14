<?php
     $x = 10;
     $y = 5;
     function calculateTowNum($x,$y,$str) {
          switch ($str){
               case "+":
                    echo "$x + $y = ".$x+$y."<br/>";
                    break;
               case "-":
                    echo "$x - $y = ".$x-$y."<br/>";
                    break;
               default:
                    echo "กรุณาเลือกเครื่องหมายที่ถูกต้องคือ + และ - เท่านั้น";
          }
     }
     calculateTowNum($x,$y,"+");
     calculateTowNum($x,$y,"-");
     calculateTowNum($x,$y,"*");
?>