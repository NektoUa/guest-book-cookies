<?php
session_start();
$val = $_GET["login"];
setcookie($val, $val, 0, "/");
$_SESSION[$val] = $val;
require_once('../src/head.php');
$out = '';
foreach ($_COOKIE as $key => $value) {
    if($_COOKIE[$key] == $val){
        $out = 'You\'re logged and welcome!';
        break;
    } else {
        $out = 'Hello first time. It\'s your guest-book!';
        break;
    }
}
?>
<body>
<div class="position-absolute top-0 start-50 translate-middle-x">
<h3><?php echo $out; ?></h3>
    <div class="mb-3">
        <label for="opinion" class="form-label">Your opinion</label>
        <textarea class="form-control" id="opinion" rows="3"></textarea>
        <input type="submit" class="btn btn-primary" value="Add opinion">
    </div>

<a href='index.php' class="btn btn-primary">return</a>
</div>
</body>
</html>