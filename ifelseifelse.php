<!-- <?php
     $score = 65;
     echo "คะแนนของคุณคือ $score คุณได้เกรด ";
     if($score >= 80) echo "A";
     else if($score >= 70) echo "B";
     else if($score >= 60) echo "C";
     else if($score >= 50) echo "D";
     else echo "F";
?> -->

<!-- <?php
     $price1 = 4500;
     $price2 = 7000;
     $price3 = 12000;
     $price4 = 25000;
     if($price1 >= 5000 && $price1 <= 10000){
          $discount1 = $price1 * 0.03;
     }else if ($price1 >= 10001 && $price1 <= 20000){
          $discount1 = $price1 * 0.05;
     }else if($price1 >= 20001){
          $discount1 = $price1 * 0.1;
     }else{
          $discount1 = 0;
     }
     $netPrice1 = $price1 - $discount1;
     echo "สินค้าที่ 1 ราคา $price1 บาท <br/>";
     echo "ได้รับส่วนลด $discount1 บาท <br/>";
     echo "ราคาสินค้าสุทธิเท่ากับ $netPrice1 <hr/>";

     if($price2 >= 5000 && $price2 <= 10000){
          $discount2 = $price1 * 0.03;
     }else if ($price2 >= 10001 && $price2 <= 20000){
          $discount2 = $price2 * 0.05;
     }else if($price2 >= 20001){
          $discount2 = $price2 * 0.1;
     }else{
          $discount2 = 0;
     }
     $netPrice2 = $price2 - $discount2;
     echo "สินค้าที่ 2 ราคา $price2 บาท <br/>";
     echo "ได้รับส่วนลด $discount2 บาท <br/>";
     echo "ราคาสินค้าสุทธิเท่ากับ $netPrice2 <hr/>";

     if($price3 >= 5000 && $price3 <= 10000){
          $discount3 = $price3 * 0.03;
     }else if ($price3 >= 10001 && $price3 <= 20000){
          $discount3 = $price3 * 0.05;
     }else if($price3 >= 20001){
          $discount3 = $price3 * 0.1;
     }else{
          $discount3 = 0;
     }
     $netPrice3 = $price3 - $discount3;
     echo "สินค้าที่ 3 ราคา $price3 บาท <br/>";
     echo "ได้รับส่วนลด $discount3 บาท <br/>";
     echo "ราคาสินค้าสุทธิเท่ากับ $netPrice3 <hr/>";

     if($price4 >= 5000 && $price4 <= 10000){
          $discount4 = $price4 * 0.03;
     }else if ($price4 >= 10001 && $price4 <= 20000){
          $discount4 = $price4 * 0.05;
     }else if($price4 >= 20001){
          $discount4 = $price4 * 0.1;
     }else{
          $discount4 = 0;
     }
     $netPrice4 = $price4 - $discount4;
     echo "สินค้าที่ 4 ราคา $price4 บาท <br/>";
     echo "ได้รับส่วนลด $discount4 บาท <br/>";
     echo "ราคาสินค้าสุทธิเท่ากับ $netPrice4 <hr/>"; 
?> -->

<?php
     $price1 = 4500;
     $price2 = 7000;
     $price3 = 12000;
     $price4 = 25000;
     function calculate_price($price){
          if($price >= 5000 && $price <= 10000){
               $discount = $price * 0.03;
          }else if ($price >= 10001 && $price <= 20000){
               $discount = $price * 0.05;
          }else if($price >= 20001){
               $discount = $price * 0.1;
          }else{
               $discount = 0;
          }
          $netPrice = $price - $discount;
          echo "สินค้าราคา $price บาท <br/>";
          echo "ได้รับส่วนลด $discount บาท <br/>";
          echo "ราคาสินค้าสุทธิเท่ากับ $netPrice <hr/>";
     }
     calculate_price($price1);
     calculate_price($price2);
     calculate_price($price3);
     calculate_price($price4);
?>

<!-- <?php
     if (เงื่อนไข) {
          คำสั่งเมื่อเงื่อนไขเป็นจริง;
     } else if(เงือนไข){
          คำสั่งเมื่อเงื่อนไขเป็นจริง;
     // } ... {
     } else {
      คำสั่งเมื่อเงื่อนไขเป็นเท็จ;
     }
?> -->