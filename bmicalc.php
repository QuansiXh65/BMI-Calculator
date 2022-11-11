<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uitkomst</title>
    <link href="../BMI Calculator/css/bmi.css" rel="stylesheet">
</head>
<body>
    <h1 class="h1php">Uitslag</h1>

<div class="phpform">

<?php

$naam = $_POST['naam'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$birthplace = $_POST['birthplace'];
$height = $height / 100;
$bmi = $weight / ($height * $height);

echo "Je naam is $naam <br />\n";

echo "Je lengte is $height meter <br />\n";

echo "Je gewicht is $weight <br />\n";

echo "Je bmi is $bmi <br />\n";

if ( $bmi < 18.5){
    echo "Je hebt ondergewicht";
} if ($bmi > 18.5 && $bmi < 25){
    echo "Je gewicht is goed";
} if($bmi > 25 && $bmi < 27){
    echo "Je hebt licht overgewicht";
} if ($bmi > 27 && $bmi < 30){
    echo "Je hebt matig overgewicht";
} if ($bmi > 30 && $bmi < 40){
    echo "Je hebt ernstig overgewicht";
} if($bmi > 40){
    echo "Je hebt gevaarlijk over gewicht";
}



?>

</div>


</body>
</html>