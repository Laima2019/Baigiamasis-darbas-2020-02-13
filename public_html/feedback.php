<?php
require '../bootloader.php';

use App\App;

$createForm = new \App\Feedback\Views\CreateForm();
$updateForm = new \App\Feedback\Views\UpdateForm();
$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();


?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="media/css/normalize.css">
    <link rel="stylesheet" href="media/css/milligram.min.css">
    <link rel="stylesheet" href="media/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <?php print $navigation->render(); ?>
</header>

<main>
    <div class="block">
        <div id="person-table">
            <table>
                <thead>
                <tr>
                    <th>Vardas</th>
                    <th>Komentaras</th>
                    <th>Data</th>

                </tr>
                </thead>
                <tbody>
                <!-- Rows Are Dynamically Populated -->
                </tbody>
            </table>
        </div>
    </div>
    <section class="wrapper">



        <?php if (App::$session->userLoggedIn()): ?>
            <?php print $createForm->render(); ?>
            <div class="block" id="review-form">
                <h2>Komentaras:</h2>
                <?php else:?>
              <p>
                  Norite parašyti atsiliepimą <a href="/register.php">Registruokis !</a>
              </p>

            </div>
        <?php endif; ?>
        <div class="block">
            <div id="person-table">
            </div>
        </div>
    </section>


</main>

<!-- Footer -->
<footer>
    <?php print $footer->render(); ?>
</footer>

<script defer src="media/js/feedback.js"></script>
</body>
</html>
