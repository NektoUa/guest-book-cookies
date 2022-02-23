<?php
session_start();
require_once('../src/head.php');

if (empty($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
?>

<body>
<div class="position-absolute top-50 start-50 translate-middle"">
<h2 >Shalom</h2>

<form action="action.php" method="POST">
    <div class="mb-3">
    <label for="login" class="form-label">enter login</label>
    <input type="text" name="login" id="login" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Enter">
</form>

<p>
    Здравствуйте, посетитель, вы видели эту страницу <?php echo $_SESSION['count']; ?> раз.
</p>

</div>
<?php

?>

</body>
</html>



