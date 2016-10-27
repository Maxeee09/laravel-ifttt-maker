<?php namespace Maxeee09\IFTTT\Maker\Managers;

use Maxeee09\IFTTT\Maker\Contracts\IFTTTMakerHTTPClientContract;

class IFTTTMakerManager
{
    /**
     * @var IFTTTMakerHTTPClientContract
     */
    protected $httpClient;

    /**
     * IFTTTMakerManager constructor.
     * @param IFTTTMakerHTTPClientContract $HTTPClient
     */
    public function __construct(IFTTTMakerHTTPClientContract $HTTPClient)
    {
        $this->httpClient = $HTTPClient;
    }

    /**
     * @param $eventName
     * @param array $payload
     *
     * @return mixed
     */
    public function event($eventName, array $payload = [])
    {
        return $this->httpClient->publishEvent($eventName, $payload);
    }
}