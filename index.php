<!DOCTYPE html>
<html>
<head>
    <title>Activity 3 - Grade Evaluator</title>
</head>
<body>

<h1>Activity 3 - Grade Evaluator</h1>
<hr>

<?php

$nacario_nstp = 95;
$nacario_ccic = 90;
$nacario_cccp = 88;
$nacario_ispqs = 85;
$nacario_genmath = 87;

$nacario_average = ($nacario_nstp + $nacario_ccic + $nacario_cccp + $nacario_ispqs + $nacario_genmath) / 5;

if ($nacario_average >= 90) {
    $letter_grade = "A";
} elseif ($nacario_average >= 80) {
    $letter_grade = "B";
} elseif ($nacario_average >= 70) {
    $letter_grade = "C";
} elseif ($nacario_average >= 60) {
    $letter_grade = "D";
} else {
    $letter_grade = "F";
}

if ($nacario_average >= 74.5) {
    $remarks = "Passed";
} else {
    $remarks = "Failed";
}

echo "<h2>Student Grades</h2>";
echo "<hr>";

echo "NSTP: " . $nacario_nstp . "<br>";
echo "CCIC: " . $nacario_ccic . "<br>";
echo "CCCP: " . $nacario_cccp . "<br>";
echo "ISPQS: " . $nacario_ispqs . "<br>";
echo "GENMATH: " . $nacario_genmath . "<br><br>";

echo "<b>Average:</b> " . number_format($nacario_average, 2) . "<br>";
echo "<b>Letter Grade:</b> " . $letter_grade . "<br>";
echo "<b>Remarks:</b> " . $remarks;

?>

</body>
</html>
