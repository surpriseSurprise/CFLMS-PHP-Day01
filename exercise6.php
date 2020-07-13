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
$chars = array(
    "bugsbunny" => "funny",
    "mickeymousey"  => "lousy",
    "tintin" =>  "plemplem"
    );
    echo "Bugs Bunny is ". $chars['bugsbunny' ] . "<br />";
    echo "Mickey Mousy is ". $chars['mickeymousey' ] . "<br />";
    echo "Tintin is ". $chars['tintin' ] . "<br />";
?>
</body>
</html>


<!-- Define an associative array and output array elements on the screen. Use for this cartoon/anime/game characters (like Mickey Mouse, Super Mario, Goku, Pokemon etc.). 

Transform this code into a solution done with multidimensional arrays to track different properties of the characters. (hint: remember the logic used for the automated creation of HTML).   -->