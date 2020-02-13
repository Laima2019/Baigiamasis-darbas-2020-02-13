<?php


require '../../../bootloader.php';

$response = new \Core\Api\Response();
$review = new \App\Feedback\Feedback();

$models = [
    'review' => new \App\Feedback\Model(),
    'user' => new \App\Users\Model(),
];

$conditions = $_POST ?? [];

$reviews = $models['review']->get($conditions);

if ($reviews !== false) {
    foreach ($reviews as $review) {
        $review_arr = $review->getData();
        $review_arr['time_stamp'] = date('y-m-d', $review_arr['time_stamp']);
        $user = $models['user']->getById($review_arr['user_id']);
        $review_arr['full_name'] = $user->getName();

        unset($review_arr['user_id']);

        $response->addData($review_arr);
    }
} else {
    $response->addError('Could not pull data from database!');
}

$response->print();