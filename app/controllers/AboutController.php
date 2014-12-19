<?php
error_reporting(E_ALL);

class AboutController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('About us');
        parent::initialize();
    }

    public function indexAction()
    {
//        $acl = $this->session->get('auth');
//        $debug = $this->session->get('debug');
//        $this->view->debug = $acl;

    }
}
