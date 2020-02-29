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

    public function data(array $data)
    {
        return $this->client->post($this->baseUrl . '/errors', [
            'site_id' => 1,
            'user_id' => 1,

            'channel' => $data['channel'],
            'code' => $data['code'],
            'context' => $data['context'],
            'datetime' => $data['datetime'],
            'exception' => $data['context']['exception'],
            'extra' => $data['extra'],
            'level_name' => $data['level_name'],
            'level' => $data['level'],
            'message' => $data['message'],

            'method' => $data['method'],
            'url' => $data['url'],
            'referrer' => $data['referrer'],
            'querystring' => $data['querystring'],
            'ip_address' => $data['ip_address'],
            'hostname' => $data['hostname'],
            'user_agent' => $data['user_agent'],
            'inputs' => $data['inputs'],
            'inputs' => $data['inputs'],
            'headers' => $data['headers'],
            'session' => $data['session'],
            'cookies' => $data['cookies'],
        ]);
    }
}
