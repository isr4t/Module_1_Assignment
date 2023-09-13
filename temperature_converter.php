<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        .input{
            font-size: 2rem;
            margin: 5px;
        }
        body{
            font-size: 20px;
        }
        .container{
            margin: auto;
            width: 800px;
            background-color: burlywood;
            text-align: center;
        }
        .btn-convert{
            background-color: greenyellow;
            text-align: center;
            font-size: 2rem;
            margin: 5px;

        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Temperature Converter</h2>
        <form method="post" action="">
        <input class="input" type="number" name="temp" placeholder="Enter temperature value" required><br>
        
        <select class="input" name="operation" id="operation">
            <option value="CelToFahr">Celsius to Fahrenheit</option>
            <option value="FahrToCel">Fahrenheit to Celsius</option>
            </select><br>
        <button class="btn-convert">Convert</button>
        </form>
    <div id="result">

    </div>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $temp = $_POST["temp"];
           
            $operation = $_POST["operation"];

            switch($operation){
                case 'CelToFahr';
                    $result = (($temp*9)/5)+32 ;   ;
                    echo "<h2>Temperature in Fahrenheit is: $result</h2>";
                    break;
                case 'FahrToCel';
                    $result = (($temp-32)*5)/9 ;   
                    echo "<h2>Temperature in celsius is: $result</h2>";
                    break;
                default;
                    
                    echo "<h2>Result: Enter a correct value</h2>";
                    break;
            }
        }
    ?>
    
    </div>
    
</body>
</html>