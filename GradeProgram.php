<?php
include("./header.php");
function getGrade($per) {
    if (!is_numeric($per) || $per < 0 || $per > 100) {
        return "Invalid per";
    }

    if ($per < 35) {
        return "Fail";
    } elseif ($per >= 35 && $per < 50) {
        return "C";
    } elseif ($per >= 50 && $per < 60) {
        return "B";
    } elseif ($per >= 60 && $per < 75) {
        return "A";
    } elseif ($per >= 75) {
        return "A+";
    }
}


$std_per = 27;
echo "Student scored: <b> $std_per% </b> => Grade: <b>" . getGrade($std_per)."</b>";





?>