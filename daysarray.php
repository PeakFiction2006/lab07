<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Using PHP Variables, arrays and operators</title>
</head>


<body>
    <h1>PHP Variables, arrays and operators</h1>
    <?php
$days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
echo "English: " . implode(", ", $days) . "<br>";
$days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
echo "French: " . implode(", ", $days);
?>
</body>
</html>
