<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h1>Even or Odd Checker</h1>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $number = $_POST["number"];

        
        if (is_numeric($number)) {
            
            if ($number % 2 == 0) {
                $message = "The number $number is even.";
            } else {
                $message = "The number $number is odd.";
            }
        } else {
            $message = "Please enter a valid numeric value.";
        }

        
        echo "<p>$message</p>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="number">Enter a number:</label>
        <input type="text" name="number" id="number" required>
        <button type="submit">Check</button>
    </form>

</body>
</html>
