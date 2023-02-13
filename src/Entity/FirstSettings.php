<?php

namespace App\Entity;

use App\Classes\SettingsClass;
use Symfony\Component\Validator\Constraints as Assert;

class FirstSettings extends SettingsClass
{
    #[Assert\NotBlank]
    #[Assert\Type('string')]
    public string $field1;

    #[Assert\Type('bool')]
    public bool $field2;

    #[Assert\Type('array')]
    public array $field3;
}
