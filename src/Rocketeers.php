<?php

namespace Rocketeers;

use Zttp\Zttp;

class Rocketeers
{
    protected $client;

    public function __construct($token)
    {
        $this->client = Zttp::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ]);
    }

    public function report(array $report)
    {
        dd($this->client);
    }
}
