<?php namespace Maxeee09\IFTTT\Maker\Contracts;

use GuzzleHttp\Client;
use Illuminate\Support\Arr;
use Maxeee09\IFTTT\Maker\Exceptions\MissingIFTTTMakerKeyException;

class GuzzleIFTTTMakerHTTPClient extends Client implements IFTTTMakerHTTPClientContract
{
    /**
     * @var string
     */
    protected $key;

    /**
     * GuzzleIFTTTMakerHTTPClient constructor.
     */
    public function __construct(array $options = [])
    {
        parent::__construct(Arr::get($options, 'options', []));
        $this->key = Arr::get($options, 'key', null);
    }

    /**
     * @throws MissingIFTTTMakerKeyException
     */
    protected function checkKey()
    {
        if (is_null($this->key)) {
            throw new MissingIFTTTMakerKeyException();
        }
    }

    /**
     * @param $eventName
     *
     * @return string
     */
    protected function getURI($eventName)
    {
        return "https://maker.ifttt.com/trigger/{$eventName}/with/key/{$this->key}";
    }

    /**
     * @param $eventName
     * @param array $payload
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function publishEvent($eventName, array $payload = [])
    {
        $this->checkKey();
        return $this->post($this->getURI($eventName), [
            'json' => $payload
        ]);
    }
}