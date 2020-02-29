<?php

namespace Rocketeers;

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
            'Authorization' => 'Bearer ' . $token,
        ]);
    }

    public function report(array $report)
    {
        return $this->client->post($this->baseUrl . '/errors', [
            'site_id' => 1,
            'user_id' => 1,
            'code' => 500,
            'method' => 'GET',
            'name' => $report['message'],
            'message' => $report['message'],
            'file' => '',
            'line' => '',
            'trace' => '',
            'url' => 'url',
            'referrer' => '',
            'inputs' => '',
            'files' => '',
            'user_name' => '',
            'user_agent' => '',
            'ip_address' => '',
            'hostname' => '',
        ]);
    }
}
