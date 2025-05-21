<?php

$dog = array(
    array("husky", "siberian", 15),
    array("bulldog", "england", 10),
    array("chihuahua", "Mexico", 20)
);


echo $dog[0][0] . ": Origin: " . $dog[0][1] . ", Lifespan: " . $dog[0][2] . "<br>";
echo $dog[1][0] . ": Origin: " . $dog[1][1] . ", Lifespan: " . $dog[1][2] . "<br>";
echo $dog[2][0] . ": Origin: " . $dog[2][1] . ", Lifespan: " . $dog[2][2] . "<br>";

for ($row = 0; $row < 3; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $dog[$row][$col] . "</li>";
    }
    echo "</ul>";
}
?>