<?php

namespace App\Interfaces;

interface TransportInterface
{
    public function setSettings(array $settings): bool;

    public function getSettings(): array;
}
