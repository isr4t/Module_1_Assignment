<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>

    <?php
    // Get user input from the URL query parameters
    $num1 = isset($_GET["num1"]) ? $_GET["num1"] : "";
    $num2 = isset($_GET["num2"]) ? $_GET["num2"] : "";
    $operation = isset($_GET["operation"]) ? $_GET["operation"] : "";
    $result = "";

    // Check if both numbers are provided and valid
    if (is_numeric($num1) && is_numeric($num2)) {
        // Perform the selected operation
        if ($operation == "add") {
            $result = $num1 + $num2;
        } elseif ($operation == "subtract") {
            $result = $num1 - $num2;
        } elseif ($operation == "multiply") {
            $result = $num1 * $num2;
        } elseif ($operation == "divide" && $num2 != 0) {
            $result = $num1 / $num2;
        } elseif ($operation == "divide" && $num2 == 0) {
            $result = "Cannot divide by zero.";
        } else {
            $result = "Invalid operation.";
        }
    }
    ?>

    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" id="num1" value="<?php echo $num1; ?>" required>
        <br>
        <label for="operation">Select operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>
        <br>
        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" id="num2" value="<?php echo $num2; ?>" required>
        <br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    // Display the result
    if (!empty($result)) {
        echo "<p>Result: $result</p>";
    }
    ?>

</body>
</html>
