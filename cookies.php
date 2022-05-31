<!DOCTYPE html>
<?php
setcookie("demo","test",time()+60);
?>
<html>
<head></head>
<body>
<?php
if(isset($_COOKIE['demo'])) {
    echo "Yes cookie is set".$_COOKIE['demo'];
    setcookie("demo","test",time()-60); // to unset cookie
}
else {
    echo "Cookie is not set";
}
?>
</body>
</html>
