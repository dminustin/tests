<?php

namespace App\Services;

use App\Classes\AbstractMicroserviceInteractor;
use App\Classes\SettingsClass;
use App\Entity\FirstSettings;

class FirstServiceInteractor extends AbstractMicroserviceInteractor
{
    protected string $microserviceName = 'FirstService';

    public function getSettings(): SettingsClass
    {
        return (new FirstSettings())->fromArray($this->transport->getSettings());
    }
}
