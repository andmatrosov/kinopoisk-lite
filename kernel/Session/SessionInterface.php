<?php

namespace App\Kernel\Session;

interface SessionInterface
{
    public function set(string $key, mixed $value): void;

    public function get(string $key, $default = null): mixed;

    public function getFlash(string $key, $default = null): mixed;

    public function has(string $key): bool;

    public function remove(string $key): void;

    public function destroy(): void;
}
