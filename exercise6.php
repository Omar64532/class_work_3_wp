<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 6</title>
</head>
<body>
    <h2>Exercise 6</h2>
    <?php
    function remove_all($str, $char) {
        return str_replace($char, '', $str);
    }
    $text = "Summer is here!";
    $charToRemove = 'e';
    echo "Original Text: $text <br>";
    echo "After removing '$charToRemove': " . remove_all($text, $charToRemove);
    ?>
</body>
</html>
