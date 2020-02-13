<?php

use App\App;

require '../../../bootloader.php';

$response = new \Core\Api\Response();

if (App::$session->userLoggedIn()) {

    $model = new \App\Feedback\Model();

    // fetch-as atsiunčia į šitą failą POST metodu duomenis (REQUEST)
    // tie duomenys tai yra formData
    //
    // Į formData buvom įtraukę feedback'o id. Vadinasi POST'e indeksu id rasim
    // to feedback'o id verte.
    //
    // Zinodami koks feedbacko eilutes id, galime su model'iu issitraukti
    // ta feedbacka. Bet get funkcija atiduoda ne "iskart" ta feedbacka
    // bet visada ideda ji i masyva. (nes funkcija pritaikyta atiduoti ir daugiau feedbacku
    // nei viena)
    // Todel pavadinam variabla ne review, o reviews.
    $reviews = $model->get(['row_id' => intval($_POST['id'])]);

    if ($reviews) {
        $person = $reviews[0];
        $model->delete($person);

        $response->setData($person->getData());
    } else {
        $response->addError('Feedback doesn`t exist');
    }
} else {
    $response->addError('Authorization failed!');
}

$response->print();
