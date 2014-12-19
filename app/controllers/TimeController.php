<?php

class TimeController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Times');
        parent::initialize();
    }

    public function indexAction()
    {
        //die(Acl::ALLOW);
        $acl = $this->session->get('auth');
        $this->view->acl = $acl;
    }

}

