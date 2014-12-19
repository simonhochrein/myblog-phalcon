<?php
use \Phalcon\Acl;
class AclController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

$this->view->acl = Acl;
    }

}

