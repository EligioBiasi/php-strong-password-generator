<!-- Quando si apre la pagina esce un warning, se si inserisce il numero funziona tutto -->

<?php
include_once __DIR__ . '\partials\functions.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- my style -->
    <link rel="stylesheet" href=".\style.css">
</head>
    <body>
        <h1 class="text-center">
            Password generator
        </h1>
        <div class="d-flex justify-content-center mt-4">
            <form action="./index.php" method="GET">
                <div class="mb-3">
                    <input type="text" class="form-control" name="password_length">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <p>
                Your new password is: <?php echo generatePw() ?>
            </p>
        </div>
    </body>
</html>