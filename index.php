<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-stringa-colorata</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php
            // if ($_GET['password'] == null) {
            //     $_GET['password'] = '';
            // }
            if(isset($_GET['password'])) {
                $password = $_GET['password'];
                if ($password == null) {

                } elseif ($password == 'Boolean') {
                    echo '<span class="green">La password corrisponde</div>';
                } else {
                    echo '<span class="red">La password non corrisponde</div>';
                }
            } else {
                echo '<span>Passami la password via GET</div>';
            }


        ?>

    </body>
</html>
