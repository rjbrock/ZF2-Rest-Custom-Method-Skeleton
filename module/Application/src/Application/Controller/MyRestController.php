<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
use Zend\Mvc\MvcEvent;

use Application\Http\CustomRequest;

class MyRestController extends AbstractRestfulController
{

    public function __construct()
    {
        $this->addHttpMethodHandler(CustomRequest::METHOD_DOSTUFF, array($this, 'handleDoStuffRequest'));
    }

    public function handleDoStuffRequest()
    {
        return new JsonModel(array('DidStuff' => true));
    }

    public function create($data)
    {
        #code
    }

    public function getList()
    {
       #code
    }

    public function get($id)
    {
        #code
    }

    public function update($id, $data)
    {
       #code
    }

    public function delete($id)
    {
        #code
    }
}
