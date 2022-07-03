<?php
     $txt1 = "Hello";
     $txt2 = " World";
     echo '$txt1 = ' . "$txt1 <br/>";
     echo '$txt2 = ' . "$txt2 <hr/>";
     echo '$txt1 . $txt2 : '.$txt1.$txt2." <hr/>";
     $txt1 .= $txt2;
     echo '$txt1 .= $txt2 : ' . $txt1.$txt2 . "<hr/>";
     echo '$txt1 = ' . "$txt1 <br/>";
     echo '$txt2 = ' . "$txt2 <br/>";
?>