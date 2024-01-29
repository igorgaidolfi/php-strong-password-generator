<?php include "./partials/functions.php" ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Random Password Generator</title>
    </head>
    <body>
        <form action="./index.php" method="get">
            <label for="">Inserire la lunghezza della password:</label>
            <input type="text" name="password" placeholder="Lunghezza">
            <button type="submit">Invia</button>
    </form>
    <?php echo pwdGenerator($_GET['password']); ?>
    </body>
</html>