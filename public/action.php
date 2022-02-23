<?php
session_start();
$val = $_POST["login"];
setcookie($val, $val, 0, "/");
$_SESSION['user'] = $val;
require_once('../src/head.php');
$out = '';
if ($_SESSION['user'] == $val) $out = "You're logged and welcome!";
?>
<body>
<div class="position-absolute top-0 start-50 translate-middle-x">
<h3><?php echo $out; ?></h3>
    <form action="guest.php" method="POST">
    <div class="mb-3">
        <label for="opinion" class="form-label">Your opinion</label>
        <textarea class="form-control" id="opinion" rows="3" name="opinion"></textarea>
        <input type="submit" class="btn btn-primary" value="Add opinion">
    </div>
    </form>

    <h3>reviews</h3>
    <ul>
        <?php
        foreach ($_SESSION['review'] as $value) {
            echo "<li>$value</li>";
        }
        ?>
        ?>
    </ul>
<a href='index.php' class="btn btn-primary">return</a>
</div>
</body>
</html>