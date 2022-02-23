<?php

$val = $_POST["login"];
setcookie($val, $val, 0, "/");
$_SESSION['user'] = $val;
require_once('../src/head.php');
$out = '';
if ($_SESSION['user'] == $val) $out = "You're logged and welcome!";
//foreach ($_COOKIE as $key => $value) {
//    if($_COOKIE[$key] == $val){
//        $out = 'You\'re logged and welcome!';
//        break;
//    } else {
//        $out = 'Hello first time. It\'s your guest-book!';
//        break;
//    }
//}
print_r($_SESSION);
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

<a href='index.php' class="btn btn-primary">return</a>
</div>
</body>
</html>