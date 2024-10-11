<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 5</title>
</head>
<body>
    <h2>Exercise 5</h2>
    <?php
    function count_words($str) {
        $words = array_count_values(str_word_count(strtolower($str), 1));
        return $words;
    }
    $text = "Hello world, hello!";
    $wordFrequency = count_words($text);
    echo "Text: $text <br>";
    echo "<pre>";
    print_r($wordFrequency);
    echo "</pre>";
    ?>
</body>
</html>
