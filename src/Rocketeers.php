<?php

namespace Rocketeers;

class Rocketeers
{
    protected $client;

    public function __construct()
    {
        $this->client = '';
    }

    public function report(array $report)
    {
        dd($report);
    }
}
