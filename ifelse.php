<!-- <?php
     $score = 49.9;
     echo "คะแนนของคุณคือ $score คุณ";
     if($score >= 50){
          echo "สอบผ่าน";
     }else{
          echo "สอบตก";
     }
?> -->
<?php
     $price1 = 12000;
     $price2 = 7000;
     if($price1 >= 10000){
          $discount1 = $price1 * 0.05;
     }else{
          $discount1 = $price1 * 0.03;
     }
     $netPrice1 = $price1 - $discount1;
     echo "สินค้าที่ 1 ราคา $price1 บาท <br/>";
     echo "ได้รับส่วนลด $discount1 บาท <br/>";
     echo "ราคาสินค้าสุทธิเท่ากับ $netPrice1 <hr/>";
     if($price2 >= 10000){
          $discount2 = $price2 * 0.05;
     }else{
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
     } else {
          คำสั่งเมื่อเงื่อนไขเป็นเท็จ;
     }
?> -->