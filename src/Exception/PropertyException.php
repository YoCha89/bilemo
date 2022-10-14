<?php

namespace App\Exception;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

final class PropertyException extends \Exception implements  HttpExceptionInterface
{

    private $headers = [];
    public function __construct($headers){
    	$this->headers = $headers;
    }
	    /**
     * Returns the status code.
     */
    public function getStatusCode(): int{
    	return 403;
    }

    /**
     * Returns response headers.
     */
    public function getHeaders()
    {
        return ['We have not find the user you are trying to delete in your registered users. You can only delete accounts from your user\'s list.'];
    }
}