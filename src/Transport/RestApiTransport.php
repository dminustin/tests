<?php

namespace App\Transport;

use App\Interfaces\TransportInterface;

class RestApiTransport implements TransportInterface
{
    public function setSettings(array $settings): bool
    {
        return true;
    }

    public function getSettings(): array
    {
        return ['field1' => rand(10000, 99999),
            'field2' => rand(10000, 99999),
            'field3' => [],
        ];
    }
}
