<?php
    $paragrafo= "L'espressione è l'orecchio soffice di una produzione velenosa e qualche volta ci credi anche tu.";
    $badWord = $_GET["badWord"];
    $censored = str_ireplace("$badWord", "***", $paragrafo);
    $badWordCheck = !empty($badWord);
    
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
        <h1>
            PHP Badwords
        </h1>

        <h2>
            La frase: 
        </h2>
        <p>
            <?php
            
            echo $paragrafo;

            ?>
        </p>

        <form action="./index.php" method="GET">
            <input type="text" name="badWord" id="badWord">
            <button type="submit" id="button1">
                Censor
            </button>
        </form>
        <div class="<?php echo $badWordCheck ? 'show' : 'hide'; ?>">
            <h2>
                La frase censurata: 
            </h2>
            <p>
                <?php

                echo $censored;

                ?>
            </p>
        </div>
        
    </body>
    <!--<script>
        const button1 = document.getElementById("button1");
        const censoredDiv = document.getElementsByClassName("hide");

        button1.addEventListener("click", function(){
            censoredDiv.classList.add("show");
            event.preventDefault();
        });
    </script>-->
    <style>
        .hide{
            display: none;
        }

        .show{
            display:block;
        }
    </style>
</html>