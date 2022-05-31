<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 3</title>
</head>
<body>
                    <b>Q2.</b>Write a PHP script to check weather a inputted number is ADAM number or not.<br>
                    <p>
                    <b>Answer:</b>
                    <br>
                    <?php
                    function checkAdamNumber($number) {
                        $reverse = strrev($number);
                        $square = $number * $number;
                        $reverseSquare = $reverse * $reverse;
                        return (strrev($square) == $reverseSquare)? true : false;
                    }
                    ?>
                    <form action="" method="post">
                        <input type="number" name="valuez" placeholder="Enter value">
                        <input type="submit" name="submit" value="Calculate">
                    </form>
                    <?php
                    echo "<br>";
                    if (isset($_POST['submit'])) {
                        try {
                            $valuez = $_POST['valuez'];
                            if (checkAdamNumber($valuez)){
                                echo "<h3> The Given Number: ".$valuez." is ADAM Number.</h3>";
                            } else {
                                echo "<h3> The Given Number: ".$valuez." is Not ADAM Number.</h3>";
                            }
                        } catch (Exception $e) {
                            echo "Error: " . $e->getMessage();
                        }
                    }
                    ?>
                    </p>

</body>
</html>