<?php
  $text = "Nel prato fatto di biscotti, i conigli patocchi, giocano con i gorilla e si fanno i pizzicotti. Il mattino dopo poi un cacciatore errante compro una zolletta di zucchero da un vikingo in cambio di 3 pizzicotti. Era un giorno d'estate e le murene cantavo insieme ai galli.";
  $text_length = strlen("$text");

  $censored_word = $_GET["censored"];
  $text_censored = str_replace($censored_word,"***",$text);
  $text_censored_length = strlen("$text_censored")

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>

<h1>PHP Badwords</h1>

<h2>I racconti della nonna (uncensored)</h2>
<p><?php echo $text ?></p>
<span>Lunghezza paragrafo: <?php echo $text_length ?> caratteri.</span>

<h2>Testo censurato</h2>
<p><?php echo $text_censored ?></p>
<span>Lunghezza paragrafo: <?php echo $text_censored_length ?> caratteri.</span>

  
</body>
</html>