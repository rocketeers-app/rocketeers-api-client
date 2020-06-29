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
        return $this->client->post($this->baseUrl.'/errors', [
            'channel' => $data['channel'],
            'environment' => $data['environment'],
            'code' => $data['code'],
            'exception' => $data['exception'],
            'message' => $data['message'],
            'context' => $data['context'], // not saved currently
            'datetime' => $data['datetime'], // not saved currently
            'extra' => $data['extra'], // not saved currently
            'level' => $data['level'], // not saved currently
            'level_name' => $data['level_name'], // not saved currently
            'file' => $data['file'],
            'line' => $data['line'],
            'trace' => $data['trace'],
            'method' => $data['method'],
            'url' => $data['url'],
            'querystring' => $data['querystring'],
            'referrer' => $data['referrer'],
            'headers' => $data['headers'],
            'cookies' => $data['cookies'],
            'files' => $data['files'],
            'inputs' => $data['inputs'],
            'sessions' => $data['sessions'],
            'user_name' => $data['user_name'],
            'user_agent' => $data['user_agent'],
            'ip_address' => $data['ip_address'],
            'hostname' => $data['hostname'],
            'command' => $data['command'],
        ]);
    }
}
