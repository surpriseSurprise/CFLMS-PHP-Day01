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
$d=date("D");
if ($d=="Mon" )
echo "<h1>Happy Friday!<h1>";
else
echo "<h1>Have a nice day!<h1>" ;

?>
</body>
</html>

<!-- Create an if statement which will be based on the current day. Output a message - if it is Monday it will return: "Happy Monday!" If it is not a Monday it should return: "Have a nice day!" -->