<?php

$nacario_NSTP = 85;
$nacario_CCIC = 90;
$nacario_CCCP = 88;
$nacario_ISPQS = 84;
$nacario_GENMATH = 89;

$nacario_average = ($nacario_NSTP + $nacario_CCIC + $nacario_CCCP + $nacario_ISPQS + $nacario_GENMATH) / 5;

if ($nacario_average >= 90) {
    $nacario_letterGrade = "A";
} elseif ($nacario_average >= 80) {
    $nacario_letterGrade = "B";
} elseif ($nacario_average >= 70) {
    $nacario_letterGrade = "C";
} elseif ($nacario_average >= 60) {
    $nacario_letterGrade = "D";
} else {
    $nacario_letterGrade = "F";
}

if ($nacario_average >= 74.5) {
    $nacario_remarks = "Passed";
} else {
    $nacario_remarks = "Failed";
}

echo "NSTP: " . $nacario_NSTP . "<br>";
echo "CCIC: " . $nacario_CCIC . "<br>";
echo "CCCP: " . $nacario_CCCP . "<br>";
echo "ISPQS: " . $nacario_ISPQS . "<br>";
echo "GENMATH: " . $nacario_GENMATH . "<br><br>";

echo "Average: " . $nacario_average . "<br>";
echo "Letter Grade: " . $nacario_letterGrade . "<br>";
echo "Remarks: " . $nacario_remarks;

?>
