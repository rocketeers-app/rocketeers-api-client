<?php

namespace Rocketeers;

class Rocketeers
{
    protected $apiToken;

    public function __construct($apiToken)
    {
        $this->apiToken = $apiToken;
    }
}
