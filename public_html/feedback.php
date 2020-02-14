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
    <title>Feedback</title>
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
    <section class="'wrapper">
        <div class="block">
            <h4>Atsiliepimų suvestinė</h4>
            <div id="person-table">
                <table>
                    <thead>
                    <tr>
                        <th>vardas</th>
                        <th>komentaras</th>
                        <th>data</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
    <section class="wrapper">
        <?php if (App::$session->userLoggedIn()): ?>
            <?php print $createForm->render(); ?>
            <div class="block" id="review-form">
        <?php else: ?>
            <p>
                Norite parašyti atsiliepimą <a href="/register.php">Registruokis!</a>
            </p>
            </div>
        <?php endif; ?>

    </section>

    <!-- Update Modal -->
    <div id="update-modal" class="modal">
        <div class="wrapper">
            <span class="close">&times;</span>
            <?php print $updateForm->render(); ?>
        </div>
    </div>
</main>

<!-- Footer -->
<footer>
    <?php print $footer->render(); ?>
</footer>

<script defer src="media/js/feedback.js"></script>
</body>
</html>
