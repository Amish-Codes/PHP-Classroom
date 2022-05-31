<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 3</title>
</head>
<body>
<div>
    <div>
        <div>
            <div>
                <p>
                    <b>Q1. </b>You have to create a number game in which a random number is generate by the PHP script itself
                    and then provide the user with input control what ever be the number user input in the field must be
                    compare with the auto generated number and show a suitable message as per the condition:
                    Input number is higher, input number is less and number is correct whenever the match is found
                    game must be stopped
                </p>
                <div>
                    <br>
                    <p>
                        <b>Answer:</b>
                        <br>

                    <h3 id="random">
                        0
                    </h3>

                    <?php
                    $random_number = 0;
                    if(isset($_COOKIE['random'])){
                        $random_number = $_COOKIE['random'];
                    }else{
                        $random_number = rand(1,100);
                        setcookie('random',$random_number);
                    }

                    echo "<form action='' method='post'><br><input type='submit' value='Guess Number' name='Guess'></form>";

                    function create_cookie(){
                        setcookie('random',rand(1,100));
                    }
                    if (isset($_POST['Guess'])) {
                        create_cookie();
                    }

                    echo "<script>document.getElementById('random').innerHTML = 'Guessed A Random Number Now You have to find it.'</script>";
                    ?>
                    <br>
                    <br>
                    <form action="" method="post">
                        <input type="number" name="number" id="number" placeholder="Enter your number here">
                        <input type="submit" name="ANS" value="Submit">
                    </form>
                    <br>
                    <br>
                    <h3 id="num">You Have Not Gussed Any Number Yet.</h3>
                    <?php
                    if(isset($_POST['ANS'])){
                        $number = $_POST['number'];
                        if($number == $random_number){
                            echo "<script>document.getElementById('num').innerHTML = 'You Guessed The Random Number'</script>";
                        }
                        else if($number > $random_number){
                            echo "<script>document.getElementById('num').innerHTML = 'Your Number Is Higher Than The Random Number'</script>";
                        }
                        else if($number < $random_number){
                            echo "<script>document.getElementById('num').innerHTML = 'Your Number Is Lower Than The Random Number'</script>";
                        }
                    }
                    ?>
                    </p>
                </div>
            </div>
</body>
</html>