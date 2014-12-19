<?php

class Comment extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $comment_id;

    /**
     *
     * @var string
     */
    public $username;

    /**
     *
     * @var integer
     */
    public $post_id;
    /*
     *
     * @var string
     */
    public $comment_text;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'comment_id' => 'comment_id', 
            'username' => 'username', 
            'post_id' => 'post_id',
            'comment_text' => 'comment_text'
        );
    }

}
