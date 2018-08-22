<?php

namespace Lanops\Challonge\Exceptions;

class UnexpectedErrorException extends \Exception
{
    public $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

}
