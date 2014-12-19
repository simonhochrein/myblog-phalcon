<?php

class Posts extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $post_id;

    /**
     *
     * @var integer
     */
    public $userid;

    /**
     *
     * @var string
     */
    public $text;
    /**
     *
     * @var string
     */
    public $username;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'post_id' => 'post_id',
            'userid' => 'userid',
            'text' => 'text',
            'username'=>'username'
        );
    }

}
