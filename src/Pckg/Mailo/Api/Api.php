<?php namespace Pckg\Mailo\Api;

use GuzzleHttp\RequestOptions;
use Pckg\Api\Api as PckgApi;
use Pckg\Mailo\Api\Endpoint\Mail;

/**
 * Class Api
 *
 * @package Pckg\Mailo\Api
 */
class Api extends PckgApi
{

    /**
     * Api constructor.
     *
     * @param $endpoint
     * @param $apiKey
     */
    public function __construct($endpoint, $apiKey)
    {
        $this->endpoint = $endpoint;
        $this->apiKey = $apiKey;

        $this->requestOptions = [
            RequestOptions::HEADERS => [
                'X-Mailo-Api-Key' => $this->apiKey,
            ],
            RequestOptions::TIMEOUT => 5,
        ];
    }

    /**
     * @return Mail
     */
    public function mail()
    {
        return new Mail($this);
    }

}