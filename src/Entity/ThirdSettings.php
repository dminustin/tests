<?php

namespace App\Entity;

use App\Classes\SettingsClass;
use Symfony\Component\Validator\Constraints as Assert;

class ThirdSettings extends SettingsClass
{
    #[Assert\Type('bool')]
    public bool $field1;

    #[Assert\Type('integer')]
    public int $field2;

    #[Assert\Type('array')]
    public array $field3;
}
