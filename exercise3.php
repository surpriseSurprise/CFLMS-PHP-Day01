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
echo "<h1>Today is Monday!<h1>";
elseif ($d=="Tue" )
echo "<h1>Today is Tuesday!<h1>";
elseif ($d=="Wed" )
echo "<h1>Today is Wednesday!<h1>";
elseif ($d=="Thu" )
echo "<h1>Today is Thursday!<h1>";
elseif ($d=="Fri" )
echo "<h1>Today is Friday!<h1>";
elseif ($d=="Sat" )
echo "<h1>Today is Saturday!<h1>";
else
echo "<h1>Today is Sunday!<h1>";

?>
</body>
</html>

<!-- Create an else if statement which will be based on the current day. Output a message - if it is Monday, it will return: "Today is Monday!" if it is Tuesday, it will return: "Today is Tuesday!" etc. for every day in the week.  -->