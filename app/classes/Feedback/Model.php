<?php

namespace App\Feedback;

use \App\App;

class Model
{
    private $table_name = 'reviews';

    public function __construct()
    {
        App::$db->createTable($this->table_name);
    }

    /**
     * Irašo $review i duombaze
     * @param Feedback $review
     * @return bool
     */

    public function insert(Feedback $review)
    {
        return App::$db->insertRow($this->table_name, $review->getData());
    }

    /**
     * @param array $conditions
     * @return array
     */

    public function get($conditions = [])
    {
        $reviews = [];
        $rows = App::$db->getRowsWhere($this->table_name, $conditions);
        foreach ($rows as $row_id => $row_data) {
            $row_data['id'] = $row_id;
            $reviews[] = new Feedback($row_data);
        }
        return $reviews;
    }

    /**
     * @param Feedback $review
     * @return bool
     */
    public function update(Feedback $review)
    {
        return App::$db->updateRow($this->table_name, $review->getId(), $review->getData());
    }

    /**
     * deletes all feedback from database
     * @param Feedback $review
     * @return bool
     */
    public function delete(Feedback $review)
    {
        return App::$db->deleteRow($this->table_name, $review->getId());
    }

    public function __destruct()
    {
        App::$db->save();
    }

}
