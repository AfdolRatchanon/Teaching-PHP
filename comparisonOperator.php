<?php
     $x = 10;
     $y = "5";
     echo '$x ='.$x. ': '.gettype($x)."<br/>";
     echo '$y ='.$y . ' : '.gettype($y)."<br/>";
     echo "$x == $y"." : ".($x == $y ? "T": "F")."<br/>";
     echo "$x === $y"." : ".($x === $y ? "T": "F")."<br/>";
     echo "$x != $y"." : ".($x != $y ? "T": "F")."<br/>";
     echo "$x <> $y"." : ".($x <> $y ? "T": "F")."<br/>";
     echo "$x !== $y"." : ".($x !== $y ? "T": "F")."<br/>";
     echo "$x > $y"." : ".($x > $y ? "T": "F")."<br/>";
     echo "$x < $y"." : ".($x < $y ? "T": "F")."<br/>";
     echo "$x >= $y"." : ".($x >= $y ? "T": "F")."<br/>";
     echo "$x <= $y"." : ".($x <= $y ? "T": "F")."<br/>";
?>