<?php

include __DIR__ . '/includes/functions.php';

$psw = '';

if (isset($_GET["number"])) {

    $psw = random_password($_GET["number"]);

    session_start();

    $_SESSION['psw'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Password Generator</title>
</head>

<body>
    <main>
        <div class="container">
            <h1>Strong Password Generator</h1>
            <h4>Genera una password sicura</h4>
            <div class="form-container">
                <form>
                    <div class="wrapper-input">
                        <label for="number-char" class="label-input-number">Lunghezza password</label>
                        <input type=" number" class="input-number" id="number-char" name="number" min="4">
                    </div>
                    <div class="wrapper-btn">
                        <button type="submit" class="btn btn-primary me-2">Invia</button>
                        <button type="reset" class="btn btn-secondary">Annulla</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>