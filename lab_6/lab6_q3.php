<?php
function calculateArea($width, $length)
{
    return $width * $length;
}

$width = 4;
$length = 2;
$area = calculateArea($width, $length);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab 6 Q3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Rectangle Area</h1>
        <p class="result">
            A rectangle with a width of <?= $width ?> and a length of <?= $length ?>
            has an area of <strong><?= $area ?> square units</strong>.
        </p>
    </main>
</body>
</html>
