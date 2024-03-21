<?php

namespace Devatmaliance\Redis;

interface Redis
{
    public function set(string $key, string $value, array $options = []): void;

    public function get($key): string;

    public function del(array $keys): void;

    public function exists(array $keys): bool;
}