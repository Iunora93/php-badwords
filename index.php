<?php 
// Creare una variabile con un paragrafo di testo a vostra scelta
$text = 'Ciao a tutti oggi è stato il mio primo giorno di backend!😊';
// Una parola da censurare viene passata dall'utente tramite parametro GET.
$word = $_GET['badword'];
$text2 = str_replace($word,"***", $text);
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
    <!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
    <h1>Intro PHP</h1>
    <p><?php echo $text; ?></p>
    <h4>La lunghezza del primo paragrafo è: <?php echo strlen($text); ?></h4>
    <p> <?php echo $text2;?> </p>
    <h4>La lunghezza del secondo paragrafo è: <?php echo strlen($text2); ?></h4>

</body>
</html>

<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.

Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->