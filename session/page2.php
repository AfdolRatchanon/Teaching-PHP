<?php
session_start();
session_destroy();
echo "page2 <br/>";
echo $_SESSION['animal'] . "<br />";
echo $_SESSION['color'] . "<br />";