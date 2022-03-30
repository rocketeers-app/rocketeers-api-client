<?php

namespace Rocketeers;

use Exception;
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

        try {
            return Http::timeout(3)
                ->withoutVerifying()
                ->withToken($this->token)
                ->withHeaders([
                    'Referer' => $referrer ?? null,
                ])
                ->post($this->baseUrl . '/errors', $data);
        } catch (Exception $e) {
            return false;
        }
    }
}
