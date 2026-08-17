<?php

$nacario_average = 90;

if ($nacario_average >= 90) {
    $letter = "A";
} elseif ($nacario_average >= 80) {
    $letter = "B";
} elseif ($nacario_average >= 70) {
    $letter = "C";
} elseif ($nacario_average >= 60) {
    $letter = "D";
} else {
    $letter = "F";
}

if ($nacario_average >= 74.5) {
    $remarks = "Passed";
} else {
    $remarks = "Failed";
}

echo "Average Grade: $nacario_average <br>";
echo "Remarks: $remarks <br>";
echo "Letter Grade: $letter";

?>