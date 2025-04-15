<?php
include("./header.php");
function calculateTicketPrice($age, $price) {
    if (!is_numeric($age) || $age < 0 || !is_numeric($price) || $price < 0) {
        return "Invalid input. Please enter valid age and ticket price.";
    }

    if ($age < 10 && $age <=! 0) {
        $finalPrice = $price * 0.5;
    } elseif ($age > 60) {
        $finalPrice = $price * 0.9;
    } else {
        $finalPrice = $price;
    }

    return "Final ticket price for age <b> $age </b> is: ₨ <b>" . number_format($finalPrice, 2)."</b>";
}

// Example usage
$age = -0;
$price = 5000;

echo calculateTicketPrice($age, $price);
?>
