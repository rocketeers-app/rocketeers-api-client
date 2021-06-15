<?php

namespace Rocketeers;

class Rocketeers
{
    protected $client;
    protected $baseUrl;

    public function __construct($token)
    {
        $this->baseUrl = 'https://rocketeers.app/api/v1';

        $this->client = new \GuzzleHttp\Client([
            'verify' => false,
            'timeout' => 3,
            'headers' => [
                'Authorization' => 'Bearer '. $token,
            ]
        ]);
    }

    public function report(array $data)
    {
        return $this->client->post($this->baseUrl.'/errors', $data);
    }
}
