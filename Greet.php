<?php

$name = htmlspecialchars($_POST['name']);

$Food = htmlspecialchars($_POST['choice']);

$hour = (int)date('G');

if ($hour >= 2 && $hour <= 11) 
{
    
    $greeting = "Good Morning";
    
} 
elseif ($hour >= 11 && $hour <= 16) 
{
    $greeting = "Good Afternoon";
} 
elseif ($hour >= 16 && $hour <= 21)
{
    $greeting = "Good Evening";
}
 else 
{
    $greeting = "Good Night";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="" href="pico.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greet</title>

</head>

<body>
    <h1><?php echo "$greeting $name";?>.</h1>
    <p>Your favorite food is <?php echo "$Food";?>.</p>
</body>

</html>