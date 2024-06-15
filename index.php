<!DOCTYPE html>
<html lang="pl-PL" data-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PhPanda</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./fontello/css/fontello.css">
    </head>
    <body>
        <main>
            <?php
                require ('./elements.php');
                logo();
                menu();
                content();
                footer();
            ?>
        </main>
    </body>
    <script src="./js/script.js"></script>
</html>