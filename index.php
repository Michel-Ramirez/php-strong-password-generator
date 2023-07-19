<?php

include __DIR__ . '/includes/functions.php';

$page_title = 'Password generator';

$number = $_GET["number"] ?? '';

$error_message = '';

if ($number) {

    $psw = random_password($number);

    session_start();

    $_SESSION['psw'] = $psw;

    header('Location: password_result.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php include __DIR__ . '/includes/layouts/haed.php' ?>

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