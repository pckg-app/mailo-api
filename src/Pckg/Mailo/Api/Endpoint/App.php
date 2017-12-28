<?php namespace Pckg\Mailo\Api\Endpoint;

use Pckg\Api\Endpoint;

/**
 * Class App
 *
 * @package Pckg\Mailo\Api\Endpoint
 */
class App extends Endpoint
{

    /**
     * @var string
     */
    protected $path = 'app';

    /**
     * @return AppKey
     */
    public function createAppKey()
    {
        return (new AppKey($this->api))->create(['app_id' => $this->id]);
    }

}