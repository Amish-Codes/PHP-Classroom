<h1>Assignment 4 - String Funcitons</h1>
<br>
<?php
//$output = "";
?>
<form action="" method="post">
    <table align="center">
        <tr>
            <th>Command</th>
            <th>Input Box</th>
            <th>Button</th>
            <th>Output</th>
        </tr>
        <tr>
            <td>Enter Your String :</td>
            <td>
                <input type="text" name="string1" placeholder="hello">
            </td>
            <td  align="center">
                <input name="md5" type="submit" value="MD5()">
            </td>
            <td align="center">
                <h3 id="output1"> </h3>
            </td>
        </tr>
        <tr>
            <td>Enter Your String :</td>
            <td>
                <input type="text" name="string2" placeholder="10000">
            </td>
            <td  align="center">
                <input name="num_formate" type="submit" value="Number_formate()">
            </td>
            <td align="center">
                <h3 id="output2"> </h3>
            </td>
        </tr>
        <tr>
            <td>Enter Your String :</td>
            <td>
                <input type="text" name="string3" placeholder="a">
            </td>
            <td  align="center">
                <input name="ord" type="submit" value="Ord()">
            </td>
            <td align="center">
                <h3 id="output3"></h3>
            </td>
        </tr>
        <tr>
            <td>Enter Your String :</td>
            <td>
                <input type="text" name="string4" placeholder='Hello World!, World!'>
            </td>
            <td  align="center">
                <input name="rtrim" type="submit" value="Rtrim()">
            </td>
            <td align="center">
                <h3 id="output4"></h3>
            </td>
        </tr>
        <tr>
            <td>Enter Your String :</td>
            <td>
                <input type="text" name="string5" placeholder="to word, by word, from word">
            </td>
            <td  align="center">
                <input name="strrep" type="submit" value="Str_replace()">
            </td>
            <td align="center">
                <h3 id="output5"></h3>
            </td>
        </tr>
        <tr>
            <td>Enter Your String :</td>
            <td>
                <input type="text" name="string6" placeholder="string">
            </td>
            <td  align="center">
                <input name="strlen" type="submit" value="Str_len()">
            </td>
            <td align="center">
                <h3 id="output6"></h3>
            </td>
        </tr>
        <tr>
            <td>Enter Your String :</td>
            <td>
                <input type="text" name="string7" placeholder="Hello world!, HELLO WORLD!">
            </td>
            <td  align="center">
                <input name="strcasecmp" type="submit" value="Strcasecmp()">
            </td>
            <td align="center">
                <h3 id="output7"></h3>
            </td>
        </tr>
        <tr>
            <td>Enter Your String :</td>
            <td>
                <input type="text" name="string8" placeholder="the pos of pos, pos">
            </td>
            <td  align="center">
                <input name="strpos" type="submit" value="Strpos()">
            </td>
            <td align="center">
                <h3 id="output8"></h3>
            </td>
        </tr>
        <tr>
            <td>Enter Your String :</td>
            <td>
                <input type="text" name="string9" placeholder="Hello World, 6">
            </td>
            <td  align="center">
                <input name="substr" type="submit" value="Substr()">
            </td>
            <td align="center">
                <h3 id="output9"></h3>
            </td>
        </tr>
        <tr>
            <td>Enter Your String :</td>
            <td>
                <input type="text" name="string10" placeholder="DFGHJ">
            </td>
            <td  align="center">
                <input name="strtolower" type="submit" value="Strtolower()">
            </td>
            <td align="center">
                <h3 id="output10"></h3>
            </td>
        </tr>
        <tr>
            <td>Enter Your String :</td>
            <td>
                <input type="text" name="string11" placeholder="Hello World!">
            </td>
            <td  align="center">
                <input name="bintohex" type="submit" value="Bintohex()">
            </td>
            <td align="center">
                <h3 id="output11"></h3>
            </td>
        </tr>
        <tr>
            <td>Enter Your String :</td>
            <td>
                <input type="text" name="string12" placeholder="Hello World!, World!">
            </td>
            <td  align="center">
                <input name="chop" type="submit" value="Chop()">
            </td>
            <td align="center">
                <h3 id="output12"></h3>
            </td>
        </tr>
    </table>
</form> 
<?php 
if (isset($_POST['md5'])) {
    $string = $_POST['string1'];
    $output = md5($string);
    echo "<script>document.getElementById('output1').innerHTML='$output';</script>";
} 
if (isset($_POST['num_formate'])) {    
    $string = $_POST['string2'];
    $output = number_format($string, 2, '.', ',');
    echo "<script>document.getElementById('output2').innerHTML='$output';</script>";
}
if (isset($_POST['ord'])) {   
    $string = $_POST['string3'];
    $output = ord($string);
    echo "<script>document.getElementById('output3').innerHTML='$output';</script>";
}
if (isset($_POST['rtrim'])) {
    $string = $_POST['string4'];
    $string = explode(',', $string);
    $output = rtrim(trim($string[0], " ") , trim($string[1], " "));
    echo "<script>document.getElementById('output4').innerHTML='$output';</script>";
}
if (isset($_POST['strrep'])) {
    $string = $_POST['string5'];
    $string = explode(',', $string);
    $output = str_replace(trim($string[0], " ") , trim($string[1], " "), trim($string[2], " "));
    echo "<script>document.getElementById('output5').innerHTML='$output';</script>";
}
if (isset($_POST['strlen'])) {     
    $string = $_POST['string6'];
    $output = strlen($string);
    echo "<script>document.getElementById('output6').innerHTML='$output';</script>";
}
if (isset($_POST['strcasecmp'])) {
    $string = $_POST['string7'];
    $string = explode(',', $string);
    $output = strcasecmp(trim($string[0], " ") , trim($string[1], " "));
    echo "<script>document.getElementById('output7').innerHTML='$output';</script>";
}
if (isset($_POST['strpos'])) {    
    $string = $_POST['string8'];
    $string = explode(',', $string);
    $output = strpos(trim($string[0], " ") , trim($string[1], " "));
    echo "<script>document.getElementById('output8').innerHTML='$output';</script>";
}
if (isset($_POST['substr'])) {
    $string = $_POST['string9'];
    $string = explode(',', $string);
    $output = substr(trim($string[0], " ") , trim($string[1], " "));
    echo "<script>document.getElementById('output9').innerHTML='$output';</script>";
}
if (isset($_POST['strtolower'])) {
    $string = $_POST['string10'];
    $output = strtolower($string);
    echo "<script>document.getElementById('output10').innerHTML='$output';</script>";
}
if (isset($_POST['bintohex'])) {
    $string = $_POST['string11'];
    $output = bin2hex($string);
    echo "<script>document.getElementById('output11').innerHTML='$output';</script>";
}
if (isset($_POST['chop'])) {
    $string = $_POST['string12'];
    $string = explode(',', $string);
    $output = chop(trim($string[0], " ") , trim($string[1], " "));
    echo "<script>document.getElementById('output12').innerHTML='$output';</script>";
}
?>
