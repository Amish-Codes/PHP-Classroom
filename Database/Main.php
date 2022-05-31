<html>
<body>
<form action="", method="post" align="center">
    <label>Name&nbsp;</label>
    <input type="text" name="user_name">
    <br>
    <label>Age</label>
    <input type="number" name="user_age">
    <br>
    <label>Mobile</label>
    <input type="number" name="user_mobile">
    <br>
    <input type="submit" name="submit-btn" value="Submit">
    <input type="submit" name="display-btn" value="Display">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $connection_check = mysqli_connect("localhost", "root", "", "user_info");

    if (!$connection_check) {
        die("Problem in connection" . mysqli_connect_error());
    }

    if (isset($_POST['submit-btn'])) {
        $User_Name = $_POST['user_name'];
        $User_Age = $_POST['user_age'];
        $User_Mobile = $_POST['user_mobile'];

        $insert_query = "INSERT INTO `user`(`Name`,`Age`,`Mobile`) VALUES('$User_Name','$User_Age','$User_Mobile')";

        if (mysqli_query($connection_check, $insert_query)) {
            echo "<h1 style='color: green'>Data inserted successfully</h1>";
            header("refresh:3,url=Main.php");
        } else {
            echo "Data not inserted";
        }
    }

    if (isset($_POST['display-btn'])) {
        $display_query = "SELECT Name,Age,Mobile from user";
        $data = mysqli_query($connection_check, $display_query);
        if (mysqli_num_rows($data) > 0) {
            echo "<table><tr><th>Name</th><th>Age</th><th>Mobile</th></tr>     ";
            while ($row = mysqli_fetch_array($data)) {
                echo "<form action='' method='post'>";
                echo "<tr>";
                echo "<td>"."<input type='text' name='uname' value=$row[Name]>"."</td>";
                echo "<td>"."<input type='text' name='uage' value=$row[Age]>"."</td>";
                echo "<td>"."<input type='text' name='u_mob' value=$row[Mobile]>"."</td>";
                echo "<td>"."<input type='submit' name='update_btn' value='update'>"."</td>";
                echo "<td>"."<input type='submit' name='delete_btn' value='delete'>"."</td>";
                echo "</tr>";
                echo "</form>";
            }

        } else {
            echo "<h1 style='color: red'>No record found</h1>";
            header("refresh:5,url=Main.php");
        }

    }
    if(isset($_POST['update_btn']))
    {
        $change = $_POST['uname'];
        $change_age = $_POST['uage'];
        $base = $_POST['u_mob'];
        $update_query = "UPDATE user SET Name='$change', Age='$change_age' WHERE Mobile='$base'";
        if(mysqli_query($connection_check,$update_query))
        {
            echo "<h1 style='color: green'>Record Updated successfully👍</h1>";
            header("refresh:3,url=Main.php");
        }
        else{
            echo "<h1 style='color: red'>Unable to update</h1>";
            header("refresh:5,url=Main.php");
        }
    }
    if(isset($_POST['delete_btn']))
    {
        $delete = $_POST['u_mob'];
        $delete_query = "DELETE FROM user WHERE Mobile='$delete'";
        if(mysqli_query($connection_check,$delete_query))
        {
            echo "<h1 style='color: green'>Record Deleted successfully👍</h1>";
            header("refresh:3,url=Main.php");
        }
        else{
            echo "<h1 style='color: red'>Unable to delete</h1>";
            header("refresh:5,url=Main.php");
        }
    }
}
?>
</body>
</html>