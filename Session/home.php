<html>
<body>
<?php
$usern = "admin";
$passw = "admin";
session_start();
if(isset($_SESSION['u_name']))
{
    echo "<h1>Hello, Welcome to our website home</h1>";
    echo "<h3 align=right>".$_SESSION['u_name']."</h3>";
    echo "<h3><a href='form.php'>Click here for prodcut details</a></h3>";
    echo "<a href='logout.php'><input type=button value=logout></a>";
}
else {
    if($usern==$_POST['username'] && $passw==$_POST['password'])
    {
        $_SESSION['u_name'] = $_POST['username'];
        echo "<script>location.href='home.php'</script>";
    }
    else {
        echo "<script>alert('Incorrect username or password')</script>";
        echo "<script>location.href='index.php'</script>";
    }
}
?>
</body>
</html>
