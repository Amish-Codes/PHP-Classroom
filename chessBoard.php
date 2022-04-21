<?php
function chessBoard($size) {
    echo "<table border='1' cellspacing='0'>";
    for($i=0;$i<$size;$i++) {
        echo "<tr>";
        for($j=0;$j<$size;$j++) {
            if($i%2==0) {
                if($j%2==0) {
                    echo "<td style='background-color: black; width: 50px; height: 50px'></td>";
                }
                else {
                    echo "<td style='background-color: white; width: 50px; height: 50px'></td>";
                }
            }
            else {
                if($j%2==0) {
                    echo "<td style='background-color: white; width: 50px; height: 50px'></td>";
                }
                else {
                    echo "<td style='background-color: black; width: 50px; height: 50px'></td>";
                }
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

chessBoard(8);
?>