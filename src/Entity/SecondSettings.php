<?php

namespace App\Entity;

use App\Classes\SettingsClass;
use Symfony\Component\Validator\Constraints as Assert;

class SecondSettings extends SettingsClass
{
    #[Assert\NotBlank]
    #[Assert\Type('string')]
    public string $field1;

    #[Assert\Type('bool')]
    public bool $field2;

    #[Assert\Type('int')]
    public int $field3;
}
