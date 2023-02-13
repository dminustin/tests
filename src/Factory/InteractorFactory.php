<?php

namespace App\Factory;

use App\Classes\AbstractMicroserviceInteractor;
use App\Services\FirstServiceInteractor;
use App\Services\SecondServiceInteractor;
use App\Services\ThirdServiceInteractor;
use App\Transport\GrpcTransport;
use App\Transport\HttpTransport;
use App\Transport\RestApiTransport;

class InteractorFactory
{
    /**
     * @throws \Exception
     */
    public static function getByName(string $name): AbstractMicroserviceInteractor
    {
        return match ($name) {
            'first' => new FirstServiceInteractor(new RestApiTransport()),
            'second' => new SecondServiceInteractor(new GrpcTransport()),
            'third' => new ThirdServiceInteractor(new HttpTransport()),
            default => throw new \Exception('Unknown service name'),
        };
    }
}
