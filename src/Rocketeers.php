<?php

namespace Rocketeers;

use Illuminate\Support\Facades\Http;

class Rocketeers
{
    protected $client;
    protected $baseUrl;
    protected $token;

    public function __construct($token)
    {
        $this->baseUrl = 'https://rocketeers.app/api/v1';
        $this->token = $token;
    }

    public function report(array $data)
    {
        if(isset($_SERVER['HTTP_HOST'])) {
            $referrer = 'http'.(isset($_SERVER['HTTPS']) ? 's' : '').'://'."{$_SERVER['HTTP_HOST']}/{$_SERVER['REQUEST_URI']}";
        }

        return Http::timeout(3)
            ->withoutVerifying()
            ->withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
                'Referer' => $referrer ?? null,
            ])
            ->post($this->baseUrl . '/errors', $data);
    }
}
