<?php

use Maxeee09\IFTTT\Maker\Facades\IFTTTMaker;

if (!function_exists('ifttt_maker')) {

    /**
     * @param $eventName
     * @param array $payload
     *
     * @return mixed
     */
    function ifttt_maker($eventName, array $payload = [])
    {
        return IFTTTMaker::event($eventName, $payload);
    }
}