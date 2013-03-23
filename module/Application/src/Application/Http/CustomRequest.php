<?php

namespace Application\Http;

use Zend\Http\PhpEnvironment\Request;

class CustomRequest extends Request
{
    const METHOD_DOSTUFF = 'DOSTUFF';
}