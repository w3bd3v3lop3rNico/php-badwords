<?php
$text = $_POST['text'];

$bad_word = $_POST['replace_word'];


// chunck split
$separator = '|';

$length = 10;

$chunk_split = chunk_split($text, $length, $separator);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $text;?></p>
    <p>Il testo è lungo <?php echo strlen($text); ?> caratteri</p>
    <p><?php echo str_replace($bad_word, '***', $text); ?></p>
    <p>Il nuovo testo è lungo <?php echo strlen(str_replace($bad_word, '***', $text));?> caratteri</p>
    <p> <?php echo $chunk_split;?></p>
    
</body>
</html>