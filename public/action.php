<?php
//var_dump($_COOKIE);
$val = $_GET["login"];
setcookie($val, $val, 0, "/");
echo "you're registered";
echo "<p>${val}</p>";
echo "<a href='index.php'>return</a>";