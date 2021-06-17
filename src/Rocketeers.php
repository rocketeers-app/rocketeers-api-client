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
        return Http::timeout(3)
            ->withoutVerifying()
            ->withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
            ])
            ->post($this->baseUrl . '/errors', $data);
    }
}
