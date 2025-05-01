<?php
// Create array with days of the week in English
$days = array(
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
);

// Display the English days
echo "<h2>Days of the Week in English:</h2>";
echo "<ul>";
foreach ($days as $day) {
    echo "<li>$day</li>";
}
echo "</ul>";

// Update the array to French days
$days = array(
    "Dimanche",   // Sunday
    "Lundi",      // Monday
    "Mardi",      // Tuesday
    "Mercredi",   // Wednesday
    "Jeudi",      // Thursday
    "Vendredi",   // Friday
    "Samedi"      // Saturday
);

// Display the French days
echo "<h2>Days of the Week in French:</h2>";
echo "<ul>";
foreach ($days as $day) {
    echo "<li>$day</li>";
}
echo "</ul>";
?>