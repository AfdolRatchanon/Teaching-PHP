<?php
     $x = array("a" => "red", "b" => "green");  
     $y = array("c" => "blue", "d" => "yellow");
     print '$x = ';
     print_r ($x);
     print "<br/>";
     print '$y = ';
     print_r ($y);
     print "<hr/>";
     print '$x + $y : ';
     print_r($x + $y);
     print "<br/>";
     print '$x == $y : ' . ($x == $y ? "T" : "F")."<br/>";
     print '$x === $y : ' . ($x === $y ? "T" : "F")."<br/>";
     print '$x != $y : ' . ($x != $y ? "T" : "F")."<br/>";
     print '$x !== $y : ' . ($x !== $y ? "T" : "F")."<br/>";
?>