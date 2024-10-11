<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>
<body>
    <h2>Exercise 3</h2>
    <?php
    function triangle($size) {
        for ($i = 1; $i <= $size; $i++) {
            echo str_repeat(" ", $size - $i) . str_repeat("*", $i) . "<br>";
        }
    }
    triangle(5);
    ?>
</body>
</html>
