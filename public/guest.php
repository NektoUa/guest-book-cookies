<?php
//session_register();
$val = $_POST["opinion"];
//array_push($_SESSION, $val);
$_SESSION['review'][] = $val;
var_dump($_SESSION);
require_once('../src/head.php');
//print_r($_SESSION);
?>

<body>
<div class="position-absolute top-0 start-50 translate-middle-x">
    <p class="mb-3"><?= $val; ?></p>
    <a href='index.php' class="btn btn-primary">return</a>
</div>
</body>
</html>
