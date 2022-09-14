<!-- <?php
     $score = 80;
     echo "คุณได้คะแนน $score ";
     if($score > 79){
          echo "ยอดเยี่ยม";
     }
?> -->
<?php
     $price1 = 7000;
     $price2 = 3000;
     $discount1 = 0;
     $discount2 = 0;
     if($price1 >= 5000){
          $discount1 = $price1 * 0.03;
     }
     $netPrice1 = $price1 - $discount1;
     echo "สินค้าที่ 1 ราคา $price1 บาท <br/>";
     echo "ได้รับส่วนลด $discount1 บาท <br/>";
     echo "ราคาสินค้าสุทธิเท่ากับ $netPrice1 <hr/>";
     if($price2 >= 5000){
          $discount2 = $price2 * 0.03;
     }
     $netPrice2 = $price2 - $discount2;
     echo "สินค้าที่ 2 ราคา $price2 บาท <br/>";
     echo "ได้รับส่วนลด $discount2 บาท <br/>";
     echo "ราคาสินค้าสุทธิเท่ากับ $netPrice2 <hr/>";
?>
<!-- <?php
     if (เงื่อนไข) {
          คำสั่งเมื่อเงื่อนไขเป็นจริง;
     }
?> -->