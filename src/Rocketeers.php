<?php

namespace Rocketeers;

use Zttp\ConnectionException;
use Zttp\Zttp;

class Rocketeers
{
    protected $client;
    protected $baseUrl;

    public function __construct($token)
    {
        $this->baseUrl = 'https://rocketeers.app/api/v1';

        $this->client = Zttp::withOptions([
            'verify' => false,
            'timeout' => 3,
        ])->withHeaders([
            'Authorization' => 'Bearer '.$token,
        ]);
    }

    public function report(array $data)
    {
        return $this->client->post($this->baseUrl.'/errors', $data);
    }
}
