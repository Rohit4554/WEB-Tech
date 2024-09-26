<?php
// Array of 30 high temperatures (example values in degrees Celsius)
$high_temps = [18, 20, 22, 21, 19, 17, 23, 25, 24, 22, 18, 16, 21, 26, 19, 27, 22, 23, 20, 21, 24, 22, 18, 25, 26, 23, 21, 20, 19, 24];

// Calculate average temperature
$average_temp = array_sum($high_temps) / count($high_temps);

// Sort the temperatures in ascending order for finding warmest and coolest
sort($high_temps);

// Get five coolest temperatures
$coolest_temps = array_slice($high_temps, 0, 5);

// Get five warmest temperatures
$warmest_temps = array_slice($high_temps, -5);

// Display the results
echo "<h3>Spring Month Weather Stats</h3>";
echo "<p>Average High Temperature: " . round($average_temp, 2) . "&deg;C</p>";

echo "<p>Five Coolest Temperatures:</p>";
echo "<ul>";
foreach ($coolest_temps as $temp) 
{
    echo "<li>" . $temp . "&deg;C</li>";
}
echo "</ul>";

echo "<p>Five Warmest Temperatures:</p>";
echo "<ul>";
foreach ($warmest_temps as $temp) 
{
    echo "<li>" . $temp . "&deg;C</li>";
}
echo "</ul>";
?>
