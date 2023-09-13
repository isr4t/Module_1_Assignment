<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>

    <?php
    $score1 = 85;
    $score2 = 95;
    $score3 = 75;

    
    $average = ($score1 + $score2 + $score3) / 3;

    
    if ($average >= 90) {
        $grade = 'A';
    } elseif ($average >= 80) {
        $grade = 'B';
    } elseif ($average >= 70) {
        $grade = 'C';
    } elseif ($average >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    
    echo "<p>Average Test Score: $average</p>";
    echo "<p>Letter Grade: $grade</p>";
    ?>

</body>
</html>
