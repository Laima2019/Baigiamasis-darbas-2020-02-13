<?php
require '../bootloader.php';

use App\App;

//$createForm = new \App\Participants\Views\CreateForm();
//$updateForm = new \App\Participants\Views\UpdateForm();
$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

//if (!App::$session->userLoggedIn()) {
//    header('Location: /login.php');
//}
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
    <div class="bg-image"></div>
    <section class="wrapper">
        <div class="services-container">
            <div class="service-container">
                <img class="img-size" src="media/image/taxi-cost.jpg">
                <h5 class="service-name" pick up taxi /h5>
                <p>Skubėdami į oro uostą, lankydami šeimos narį už miesto ar vykdami į susitikimą, „Taxi“ gali patenkinti visus jūsų mobilumo poreikius mieste.</p>
                </p>
            </div>
            <div class="service-container">
                <img class="img-size" src="media/image/taxi-cost.jpg">
                <h5 class="service-name" pick up taxi /h5>
                <p>
                    Mūsų parką sudaro prabangūs „Mercedes Benz“ sedanai , taip pat mikroautobusai, dideli furgonai ir šventiniai autobusai jūsų didelėms grupėms.</p>
                </p>
            </div>
            <div class="service-container">
                <img class="img-size" src="media/image/taxi-cost.jpg">
                <h5 class="service-name" pick up taxi /h5>
                <p>Mūsų kainos prieinamos, o vairuotojai visada mandagūs ir profesionalūs.
                    Mes suprantame, kaip svarbu jus sudominti
                    Kelionės tikslas yra saugus ir greitas, todėl mes kiekvieną kartą didžiuojamės tuo, kad atvykstame laiku.</p>
            </div>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.219426156676!2d25.33569661544398!3d54.723355078378475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010221%2C%20Lithuania!5e0!3m2!1sen!2sdk!4v1581590400491!5m2!1sen!2sdk"
                width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</main>

<!-- Footer -->
<footer>
    <?php print $footer->render(); ?>
</footer>

<script defer src="media/js/app.js"></script>
</body>
</html>
