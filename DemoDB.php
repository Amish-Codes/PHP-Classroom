<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!--    <link rel="stylesheet" href="style.css">-->
</head>
<body>
<div>
    <div class="center">
        <form action="" method="post">
            <br><br>
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname"><br><br>
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname">
            <br><br>
            <input type="submit" value="Submit" name="save">
            <input type="submit" value="Display" name="display">
        </form>
    </div>
</div>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $ser_name = "localhost";
    $ser_user = "root";
    $ser_pass = "";
    $db_name = "demodb";
    $connection_check = mysqli_connect($ser_name, $ser_user, $ser_pass, $db_name);

    if(!$connection_check){
        die("Connection failed: " . mysqli_connect_error(). "<br>");
    } else {
        echo "Connected successfully". "<br>";
    }
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    if (isset($_POST['save'])) {
        $insert_query = "INSERT INTO test(fname,lname) VALUES ('$fname', '$lname')";
        if (mysqli_query($connection_check, $insert_query)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $insert_query . "<br>" . mysqli_error($connection_check);
        }
    }
    if (isset($_POST['display'])) {
        $select_query = "SELECT * FROM test";

        $select_result = mysqli_query($connection_check, $select_query);

        if(mysqli_num_rows($select_result) > 0){
            echo "<form action='' method='post'>";
            echo "<table>";
            echo "<tr>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Update</th>";
            echo "<th>Delete</th>";
            echo "</tr>";
            while($row = mysqli_fetch_assoc($select_result)){
                echo "<tr>";
                echo "<td>" . "<input type='text' name='fname' id='fname' value=". $row['fname']."> </td>";
                echo "<td>" . "<input type='text' name='lname' id='lname' value=". $row['lname']."> </td>";
                echo "<td>" . "<input type='submit' value='Update' name='update'> </td>";
                echo "<td>" . "<input type='submit' value='Delete' name='delete'> </td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</form>";

        } else {
            echo "0 result";
        }
    }
    if(isset($_POST['update'])){
        $update_query = "UPDATE test SET fname='$fname', lname='$lname' WHERE fname='$fname'";
        if (mysqli_query($connection_check, $update_query)) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $update_query . "<br>" . mysqli_error($connection_check);
        }
    }

    if(isset($_POST['delete'])){
        $delete_query = "DELETE FROM test WHERE fname='$fname'";
        if (mysqli_query($connection_check, $delete_query)) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $delete_query . "<br>" . mysqli_error($connection_check);
        }
    }

}

?>
</body>
</html>