<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>

    <?php
    $temperature = 60; 

    
    if ($temperature <= 32) {
        $message = "It's freezing!";
    } elseif ($temperature <= 50) {
        $message = "It's cold.";
    } elseif ($temperature <= 70) {
        $message = "It's cool.";
    } elseif ($temperature <= 85) {
        $message = "It's warm.";
    } else {
        $message = "It's hot!";
    }
    ?>

    <p>Current Temperature: <?php echo $temperature; ?>°F</p>
    <p><?php echo $message; ?></p>

</body>
</html>
