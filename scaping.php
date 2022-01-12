<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First exercise</title>
</head>
<body>

    <p>This is a paragraph</p>

    <?php 
        echo "Hello World";//Show on screen

        //You can also point out tags inside the echo, and be like regular html
        echo "<p>Hello World</p>";

        print "Hello php";//Show on screen
    ?>

    <!-- Without scaping -->
    <?php
        if (1 == 1) {
            echo("<p>This works! Yay!</p>");
        }
    ?>

    <!-- With escaping -->
    <?php if (1 == 1) { ?>
        <p>This works! Yay!</p>
    <?php } ?>
    <!--Best to keep them separated using scaping -->

    <p>This is another paragraph</p>
</body>
</html>