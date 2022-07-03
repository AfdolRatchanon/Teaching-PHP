<?php
     $x = "hello";
     function hello(){
          echo "ในฟังชั่น ".$GLOBALS['x']." <br/>";
     }
     hello();
     echo "นอกฟังชั่น $x <br/>";
?>