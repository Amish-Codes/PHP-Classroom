<table align  = "center" border = "1" width="100%">
<?php

function table(int $num1, int $num2) {

    for ($num1; $num1 <= $num2; $num1++) {

        $count=1;
        while ($count<=10) {
            echo  "<td>$num1 * $count = " . $num1*$count . "</td>";
            $count++;
        }

    }
    echo "</tr>";

}
table(2, 100);
?>
</table>