<?php

session_start();

$_SESSION['psw'] = $psw;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if ($psw) : ?>
        <div class="alert alert-info" role="alert">
            <div>La tua password è : <span class="psw-text"> <?= $psw ?> </span> </div>
        </div>
    <?php endif ?>

</body>

</html>