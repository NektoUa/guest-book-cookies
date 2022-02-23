<?php
require_once('../src/head.php');
//echo $_COOKIE['don'];
//session_start();
//echo $_SERVER['HTTP_USER_AGENT'];
//$_SESSION['test'] = 'singapore';
//var_dump($_SESSION);
//echo $_SESSION['test'];
//session_destroy();
?>

<body>
<div class="position-absolute top-50 start-50 translate-middle"">
<h2 >Shalom</h2>

<form action="action.php" method="GET">
    <div class="mb-3">
    <label for="login" class="form-label">enter login</label>
    <input type="text" name="login" id="login" class="form-control">
    </div>
<!--    <div class="mb-3 form-check">-->
<!--        <input type="checkbox" class="form-check-input" id="checkAgree" name="check">-->
<!--        <label class="form-check-label" for="checkAgree">I agree</label>-->
<!--    </div>-->
    <input type="submit" class="btn btn-primary" value="Enter">
</form>
</div>
<?php

?>

</body>
</html>



