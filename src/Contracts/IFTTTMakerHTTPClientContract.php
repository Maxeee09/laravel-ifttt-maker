<?php namespace Maxeee09\IFTTT\Maker\Contracts;

interface IFTTTMakerHTTPClientContract
{
    /**
     * @param $eventName
     * @param array $payload
     */
    public function publishEvent($eventName, array $payload = []);
}