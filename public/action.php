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
<div class="position-absolute top-20 start-50 translate-middle-x mt-1">
<h3><?php echo $out; ?></h3>
    <form action="guest.php" method="POST">
    <div class="mb-3">
        <label for="opinion" class="form-label">Your opinion</label>
        <textarea class="form-control" id="opinion" rows="3" name="opinion"></textarea>
    </div>
        <input type="submit" class="btn btn-primary" value="Add opinion">
    </form>
<br />
    <h3 class="pt-2">reviews</h3>
    <ul>
        <?php
        if(isset($_SESSION['review'])) {

            foreach ($_SESSION['review'] as $value) {
                echo "<li>$value</li>";
            }
        } else {
            echo "sorry we don't have reviews";
        }
        ?>
    </ul>
<a href='index.php' class="btn btn-primary">return</a>
</div>
</body>
</html>