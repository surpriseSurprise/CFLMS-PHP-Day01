<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
$F = rand(-40,104); 
echo "<div>The temperature is ".$F."° Fahrenheit.</div>";
$C = floor(($F - 32) * (5/9));
echo "<p>$F ° Fahrenheit is " .$C ." ° Celsius.</p>";
if ($C < -1) 
echo "The weather is extremely cold.";
elseif ($C < 5) 
    echo "The weather is very cold.";
elseif ($C < 11) 
    echo "The weather is cold.";
elseif ($C < 15) 
    echo "The weather is pleasant.";
elseif ($C < 20) 
    echo "The weather is warm.";
elseif ($C > 21) 
    echo "The weather is hot.";
else
    echo "Climate change.";
?>   
   
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>

<!-- 1- Create a function that can convert °F in °C and show the result on the screen.


2- You can play with the results creating conditionals and showing on the screen a different img and message depending on the temp:

From 0°C to 5°C: Very cold

From 6°C to 10°C: Cold

From 11°C to 15°C: Pleasant

From 16°C to 20°C: Warm

Above 21°C: Hot -->

<!-- 
Use Bootstrap to show yours results on the screen. -->