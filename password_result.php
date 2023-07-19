<?php


include __DIR__ . '/includes/functions.php';

session_start();

$char_number = $SESSION['number'];
$psw = random_password($char_number);


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