<?php

$dogg = array(
    array("pug", "england", 10),
    array("bulldog", "england", 10),
    array("hound", "england", 10)
);

echo . " type " . $dogg[0][0] . $dogg[0][1] . " origin " . $dogg[0][2] . " lifespan<br>";
echo $dogg[1][0] . " type " . $dogg[1][1] . " origin " . $dogg[1][2] . " lifespan<br>";
echo $dogg[2][0] . " type " . $dogg[2][1] . " origin " . $dogg[2][2] . " lifespan<br>";

for ($row = 0; $row < 3; $row++) {
    echo "<p><b>row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $dogg[$row][$col] . "</li>";
    }
    echo "</ul>";
}

$array = array(
    array(1, 2, 3),
    array(1, 2, 3),
    array(1, 2, 3)
);

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}

$grade = array(
    "math" => 5,
    "art" => 5,
    "history" => 5,
    "music" => 5,
);

foreach ($grade as $key => $value) {
    echo "subject = " . $key . ", grade = " . $value;
    echo "<br>";
}

for ($i = 1; $i < 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

?>

