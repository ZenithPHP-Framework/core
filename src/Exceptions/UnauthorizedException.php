<?php

namespace Dasunnethsara\ZenithphpCore\Exceptions;

class UnauthorizedException extends \Exception
{
    protected $message = 'Unauthorized access';
    protected $code = 401;
}
