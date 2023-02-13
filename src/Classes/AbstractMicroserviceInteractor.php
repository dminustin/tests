<?php

namespace App\Classes;

use App\Interfaces\TransportInterface;

abstract class AbstractMicroserviceInteractor
{
    protected TransportInterface $transport;
    protected string $microserviceName;

    public function getMicroserviceName(): string
    {
        return $this->microserviceName;
    }

    public function __construct(TransportInterface $transport)
    {
        $this->transport = $transport;
    }

    abstract public function getSettings(): SettingsClass;

    public function setSettings(array $settings)
    {
        $this->transport->setSettings($settings);
    }
}
