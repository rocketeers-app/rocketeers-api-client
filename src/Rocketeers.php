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
            'exception' => $data['context']['exception'] ?? null,
            'extra' => $data['extra'],
            'level_name' => $data['level_name'],
            'level' => $data['level'],
            'message' => $data['message'],

            'cookies' => $data['cookies'],
            'headers' => $data['headers'],
            'hostname' => $data['hostname'],
            'inputs' => $data['inputs'],
            'ip_address' => $data['ip_address'],
            'method' => $data['method'],
            'querystring' => $data['querystring'],
            'referrer' => $data['referrer'],
            'session' => $data['session'],
            'url' => $data['url'],
            'user_agent' => $data['user_agent'],
        ]);
    }
}
