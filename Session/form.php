<html>
<body>
<?php
session_start();
if(isset($_SESSION['u_name']))
{
    echo "<h1>Hello, Welcome to details</h1>";
    echo "<h3 align=right>".$_SESSION['u_name']."</h3>";
    echo "<h3><a href='home.php'>Click here for Home</a></h3>";
    echo "<a href='logout.php'><input type=button value=logout></a>";
}
else {
    echo "<script>location.href='index.php'</script>";
}
?>
</body>
</html>