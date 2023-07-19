<?php

$page_titol = 'La tua password';

session_start();

$psw = $_SESSION['psw'];

?>


<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/includes/layouts/haed.php' ?>

<body>
    <main>
        <div class="container">
            <?php if ($psw) : ?>
                <div class="alert alert-info" role="alert">
                    <div class="d-flex flex-column align-items-center my-5">
                        <h1 class="text-dark mb-5">La tua password</h1>
                        <span class="psw-text"> <?= $psw ?> </span>
                    </div>
                    <div class="text-end">
                        <a href="index.php">Indietro</a>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </main>
</body>

</html>