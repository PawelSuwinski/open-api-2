<?php

namespace Jane\OpenApi2\Tests\Expected\One\Exception;

class TestOneNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Not found');
    }
}