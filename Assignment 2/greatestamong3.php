<form action="" method="post">
    <input type="number" name="num_one" placeholder="Enter number">
    <input type="number" name="num_two" placeholder="Enter number">
    <input type="number" name="num_three" placeholder="Enter number">
    <input type="submit" name="submit" placeholder="calculate">
</form>

<?php
function checkGreater($num_one, $num_two, $num_three) {
    switch (true) {
        case $num_one > $num_two && $num_one > $num_three:
            echo "$num_one is greater than $num_two and $num_three";
            break;
        case $num_two > $num_one && $num_two > $num_three:
            echo "$num_two is greater than $num_one and $num_three";
            break;
        case $num_three > $num_one && $num_three > $num_two:
            echo "$num_three is greater than $num_one and $num_two";
            break;
        default:
            echo "All numbers are equal";
            break;
    }
}

if(isset($_POST['submit'])) {
    $num_one = $_POST['num_one'];
    $num_two = $_POST['num_two'];
    $num_three = $_POST['num_three'];
    checkGreater($num_one, $num_two, $num_three);
}
?>
