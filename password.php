<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
    <body>
    <div class="d-flex justify-content-center mt-2">
            <p>
                Your new password is: <?php $_SESSION['password'] = $password ?>
            </p>
        </div>
    </body>
</html>