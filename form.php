<?php
$text = "L'innovazione è fondamentale nel mondo moderno. Senza innovazione, la stagnazione prevale. Le aziende prosperano grazie all'innovazione costante. Le menti creative alimentano l'innovazione. Senza l'innovazione, il progresso diventa difficile.";

$bad_word = $_POST['replace_word'];
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
    
</body>
</html>