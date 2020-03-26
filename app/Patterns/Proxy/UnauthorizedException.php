<?php

namespace App\Patterns\Proxy;

use Exception;

class UnauthorizedException extends Exception
{
    public function __construct()
    {
        parent::__construct('User doesn\'nt have the required permission for accessing this resource', 0, null);
    }
}
