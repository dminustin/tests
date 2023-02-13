<?php

namespace App\Services;

use App\Classes\AbstractMicroserviceInteractor;
use App\Classes\SettingsClass;
use App\Entity\ThirdSettings;

class ThirdServiceInteractor extends AbstractMicroserviceInteractor
{
    protected string $microserviceName = 'ThirdService';

    public function getSettings(): SettingsClass
    {
        return (new ThirdSettings())->fromArray($this->transport->getSettings());
    }
}
