<?php

namespace Dasunnethsara\ZenithphpCore\Exceptions;

class NotFoundException extends \Exception
{
    protected $code = 404;
    protected $message = "Resource not found";
}