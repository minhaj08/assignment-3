<?php
function avg_calc($studentGrades) {
    $avgGrades = array();

    foreach ($studentGrades as $grades) {
        $total = 0;
        $count = count($grades);

        foreach ($grades as $grade) {
            $total += $grade;
        }

        $avg = $total / $count;
        $avgGrades[] = $avg;
    }

    for ($i = 0; $i < count($avgGrades); $i++) {
        echo "Student " . ($i + 1) . " Average Grade: " . $avgGrades[$i] . "\n";
    }
}

$studentGrades = array(
    array(95, 88, 92),
    array(78, 85, 90),
    array(88, 92, 86)
);

avg_calc($studentGrades);

