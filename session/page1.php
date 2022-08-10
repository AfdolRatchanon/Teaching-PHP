<?php
session_start();
echo "page1 <br/>";
$_SESSION['animal'] = "cat";
$_SESSION['color'] = "blue";
echo "<a href='page2.php'>goto page2</a>";