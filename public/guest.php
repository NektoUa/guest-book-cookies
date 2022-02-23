<?php
session_start();
$val = $_POST["opinion"];
$_SESSION['review'][] = $val;
require_once('../src/head.php');
?>

<body>
<div class="position-absolute top-0 start-50 translate-middle-x">
    <p class="mb-3">Your opinion "<?= $val; ?>" add sucesfully</p>
    <a href='index.php' class="btn btn-primary">return</a>
</div>
</body>
</html>
