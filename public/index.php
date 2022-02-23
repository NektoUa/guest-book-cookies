<?php
require_once('../src/head.php');
?>

<body>
<div class="position-absolute top-50 start-50 translate-middle"">
<h2 >Shalom</h2>

<form action="action.php" method="GET">
    <div class="mb-3">
    <label for="login" class="form-label">enter login</label>
    <input type="text" name="login" id="login" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Enter">
</form>
</div>
<?php

?>

</body>
</html>



