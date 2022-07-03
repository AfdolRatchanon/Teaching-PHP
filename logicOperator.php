<?php
     $x = true;
     $y = false;
     echo '$x && $y : '.($x && $y ? "T" : "F")."<br/>";
     echo '$x || $y : '.($x || $y ? "T" : "F")."<br/>";
     echo '$x xor $y : ';
     if($x xor $y) echo "T";
     else echo "T";
     echo "<br/>";
     echo '!$x : '.(!$x ? "T" : "F")."<br/>";
?>