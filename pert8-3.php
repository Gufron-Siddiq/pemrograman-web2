<?php
function repeat ($text, $num = 10) {
    echo "<o|>\r\n";
    for( $i = 0; $i < $num; $i++ ) {
        echo "<li>$text</li>\r\n";
    }
    echo "</o|>";
}
repeat ("Romeeeeee",10);
echo repeat ("rome",10);
?>