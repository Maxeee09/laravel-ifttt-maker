<?php namespace Maxeee09\IFTTT\Maker\Exceptions;

use Exception;

class MissingIFTTTMakerKeyException extends \Exception
{
    /**
     * MissingIFTTTMakerKeyException constructor.
     */
    public function __construct()
    {
        parent::__construct("IFTTT Maker KEY is missing");
    }
}