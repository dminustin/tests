<?php

namespace App\Services;

use App\Classes\AbstractMicroserviceInteractor;
use App\Classes\SettingsClass;
use App\Entity\SecondSettings;

class SecondServiceInteractor extends AbstractMicroserviceInteractor
{
    protected string $microserviceName = 'SecondService';

    public function getSettings(): SettingsClass
    {
        return (new SecondSettings())->fromArray($this->transport->getSettings());
    }
}
