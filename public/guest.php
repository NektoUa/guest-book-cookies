<?php
$val = $_POST["opinion"];
require_once('../src/head.php');
?>

<body>
<div class="position-absolute top-0 start-50 translate-middle-x">
    <p class="mb-3"><?php echo $val; ?></p>
    <a href='index.php' class="btn btn-primary">return</a>
</div>
</body>
</html>
