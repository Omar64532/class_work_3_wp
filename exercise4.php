<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4</title>
</head>
<body>
    <h2>Exercise 4</h2>
    <?php
    function word_count($str) {
        return str_word_count($str);
    }
    $text = "hello, how are you?";
    echo "Text: $text <br>";
    echo "Word count: " . word_count($text);
    ?>
</body>
</html>
