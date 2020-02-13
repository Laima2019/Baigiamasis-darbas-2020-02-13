<?php

namespace App\Feedback;

class Feedback
{

    private $data = [];

    public function __construct($data = null)
    {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'id' => null,
                'review' => null,
                'time_stamp' => null,
                'user_id' => null,
            ];
        }
    }

    /**
     * * Sets all data from array
     * @param $array
     */
    public function setData($array)
    {
        if (isset($array['id'])) {
            $this->setId($array['id']);
        } else {
            $this->data['id'] = null;
        }
        $this->setReview($array['review'] ?? null);
        $this->setTimeStamp($array['time_stamp'] ?? null);
        $this->setUserId($array['user_id'] ?? null);
    }

    /**
     * Gets all data as array
     * @return array
     */
    public function getData()
    {
        return [
            'id' => $this->getId(),
            'review' => $this->getReview(),
            'time_stamp' => $this->getTimeStamp(),
            'user_id' => $this->getUserId(),
        ];
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->data['id'] = $id;
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->data['id'];
    }

    /**
     * Sets review
     * @param string $review
     */
    public function setReview(string $review)
    {
        $this->data['review'] = $review;
    }

    /**
     * Returns review
     * @reFturn string
     */
    public function getReview()
    {
        return $this->data['review'];
    }

    /**
     * Sets data time_stamp
     * @param string $time_stamp
     */
    public function setTimeStamp(string $time_stamp)
    {
        $this->data['time_stamp'] = $time_stamp;
    }

    /**
     * @return mixed
     */
    public function getTimeStamp()
    {
        return $this->data['time_stamp'];
    }

    /**
     * Sets data user_id
     * @param integer $user_id
     */
    public function setUserId(int $user_id)
    {
        $this->data['user_id'] = $user_id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->data['user_id'];
    }

}
