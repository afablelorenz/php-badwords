<?php
    $paragrafo= "L'espressione è l'orecchio soffice di una produzione velenosa e qualche volta ci credi anche tu.";
    $badWord = $_GET["badword"];
    $censored = str_ireplace("$badword", "***", $paragrafo);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>PHP Badwords</h1>


        <h2>La frase: </h2>
        <p><?php echo $paragrafo?></p>

        <form action="./index.php" method="GET">
            <input type="text" name="badword" id="badword">
            <button type="submit">
                Censor
            </button>
        </form>
    </body>
</html>