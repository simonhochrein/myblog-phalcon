<?php

class BlogController extends ControllerBase
{

    public function initialize(){
        $this->tag->setTitle('blog');
        parent::initialize();
    }
    public function indexAction()
    {

        $posts = Posts::find();
$comment = Comment::find();
        foreach ($comment as $comments) {

        }



        $this->view->posts = $posts;
        $this->view->comments = $comment;

        //$this->view->Users = Users;
    }
    public function postAction(){
        $auth = $this->session->get('auth');


        if(!empty($auth)){
if($this->request->isPost()){
    //die('hi');

$post = new Posts();
    $post->text = $this->request->getPost('text');
$post->userid = $auth['id'];
    $post->username = $auth['name'];
    $post->save();


}
            $this->view->auth = $auth;
        }
    }
    public function userAction($userName){
        $posts = Posts::find();
        $this->view->posts = $posts;
        $this->view->username = $userName;

    }

}

