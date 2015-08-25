<?php

namespace ApplicationTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class MyRestControllerTest extends AbstractHttpControllerTestCase
{
    const APPLICATION_CONFIG_PATH =  __DIR__.'/../../../../../config/application.config.php';

    public function setUp()
    {
        $applicationConfigArray = require(self::APPLICATION_CONFIG_PATH);
        $this->setApplicationConfig($applicationConfigArray);
        parent::setUp();
    }

    public function testDoStuff()
    {
        $this->dispatch('/myrest', 'DOSTUFF');
        $response = $this->getResponse();

        $this->assertEquals(200, $response->getStatusCode());
//        $this->assertEquals($expectedContent, $response->getContent());
    }
}
