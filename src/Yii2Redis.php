<?php

namespace Devatmaliance\Redis;

use yii\redis\Connection;

final class Yii2Redis implements Redis
{
    private Connection $client;

    public function __construct(ConnectionConfig $config)
    {
        $client = new Connection();
        $client->hostname = $config->getHostname();
        $client->port = $config->getPort();

        $this->client = $client;
    }

    /**
     * @param string $key
     * @param string $value
     * @param array $options
     * @return void
     */
    public function set(string $key, string $value, array $options = []): void
    {
        $this->client->set($key, $value, ...$options);
    }

    /**
     * @param $key
     * @return string
     */
    public function get($key): string
    {
        return (string)$this->client->get($key);
    }

    /**
     * @param array $keys
     * @return void
     */
    public function del(array $keys): void
    {
        $this->client->del(...$keys);
    }

    public function exists(array $keys): bool
    {
        return $this->client->exists(...$keys);
    }
}