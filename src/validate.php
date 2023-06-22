<?php
$age = $_POST['age'];
$weight = $_POST['weight'];

if ($age < 5) {
    $output = "Not useful for people with age less than 5";
} elseif ($age >= 5 && $age <= 7) {
    if ($weight < 15) {
        $output = "Underweight";
    } elseif ($weight >= 15 && $weight < 21) {
        $output = "fit";
    } else {
        $output = "overweight";
    }
} elseif ($age >= 8 && $age <= 10) {
    if ($weight < 21) {
        $output = "Underweight";
    } elseif ($weight >= 21 && $weight < 26) {
        $output = "fit";
    } else {
        $output = "overweight";
    }
} elseif ($age >= 11 && $age <= 15) {
    if ($weight < 26) {
        $output = "Underweight";
    } elseif ($weight >= 26 && $weight < 31) {
        $output = "fit";
    } else {
        $output = "overweight";
    }
} elseif ($age >= 16 && $age <= 20) {
    if ($weight < 31) {
        $output = "Underweight";
    } elseif ($weight >= 31 && $weight < 41) {
        $output = "fit";
    } else {
        $output = "overweight";
    }
} else {
    $output = "Age > 20 isn't considered (as of now)";
}
if ($weight > 150) {
    $output = "please enter realistic weight";
}
if ($weight < 0 || $age < 0) {
    $output = "please enter positive values";
}
header("location:index.php?msg=$output");
