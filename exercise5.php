<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
$array = array( 1, 2, 3, 4, 5,6,7,8,9,10);
foreach( $array as  $value )
{
echo "The value is $value <br />";
}
?>
</body>
</html>


<!-- Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element.   -->