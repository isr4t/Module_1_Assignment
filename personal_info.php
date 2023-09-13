<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal information</title>
<style>
    h1{
        text-align: center;
        background-color: ##fcb103;
    }
    h2{
        margin: 0;
        padding: 0;
        
    }
    p{
        color: teal;
        line-height: 20px;
    }
    .container{
        width: 600px;
        margin: auto;
        padding: 10px;
       
    }
</style>

</head>
<body>
<div class="container">
    <h1>My Personal Information</h1>
<?php
$name ="Israt Jahan";
$age =23;
$country ="Bangladesh";
$bio ="Hello, I am Israt Jahan and I'm on a journey to become a skilled web developer. I'm passionate about coding, creating interactive websites, and exploring the endless possibilities of the digital world. I may be a beginner, but my enthusiasm for learning and building is boundless.

";

echo "<h2>Name: ".$name."</h2><br>";
echo "<h2>Age: ".$age."</h2><br>";
echo "<h2>Country: ".$country."</h2><br>";
echo "<p>Bio: ".$bio."</p><br>";



?>
</div>
</body>
</html>


