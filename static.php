<?php
     function hello(){
          static $x = 1;
          echo $x++."<br/>";
     }
     hello();
     hello();
     hello();
?>