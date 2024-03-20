<?php

namespace atmaliance\redis;

class ConnectionConfig
{
    private string $port;
    private string $hostname;

    public function __construct(string $hostname, int $port)
    {
        $this->hostname = $hostname;
        $this->port = $port;
    }

    public function getHostname(): string
    {
        return $this->hostname;
    }

    public function getPort(): int
    {
        return $this->port;
    }
}