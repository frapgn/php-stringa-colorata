<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-stringa-colorata</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php

            $_GET['password'] = '';
            $password = $_GET['password'];
            if ($password == '') {
                echo '<span>Passami la password via GET</div>';
            } elseif ($password == 'Boolean') {
                echo '<span class="green">La password corrisponde</div>';
            } else {
                echo '<span class="red">La password non corrisponde</div>';
            }

        ?>

    </body>
</html>
