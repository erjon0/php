<?php
$employees = array(
    array(
        "name" => "eden",
        "age" => 30,
        "position" => "Software Engineer"
    ),
    array(
        "name" => "andi",
        "age" => 25,
        "position" => "Project Manager"
    ),
    array(
        "name" => "donart",
        "age" => 35,
        "position" => "Product Owner"
    ),
    array(
        "name" => "bledi",
        "age" => 28,
        "position" => "UX Designer"
    )
);

// Example of accessing the array
foreach ($employees as $employee) {
    echo "Name: " . $employee["name"] . ", Age: " . $employee["age"] . ", Position: " . $employee["position"] . "<br>";
}
?>