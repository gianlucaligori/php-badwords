<?php
// Ottenere il testo inserito dall'utente
$text = $_POST['paragrafo'];

// Definire Parola censurata
$censoredWord = $_POST['bannedWord'];

// Sostituzione parola da censurare con xxx di Subject $text
$censoredText = str_replace($censoredWord, 'xxx', $text);


// Ottenere la lunghezza della parola
$wordLen = strlen($censoredText); ?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <div class="typedPar">
            <h1> Il tuo testo è: <?= $text ?> </h1>
        </div>

        <div>
            <h2>Parola Censurata: <span class="cenWord"><?= $censoredWord ?></span></h2>
        </div>

        <div class="cenText">
            <h2> Testo con parole censurate <?= $censoredText ?> </h2>
        </div>

        <div>
            <h2>Lunghezza della Parola: <?= $wordLen ?></h2>
        </div>
    </div>
</body>

</html>