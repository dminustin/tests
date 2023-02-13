<?php

namespace App\Classes;

class SettingsClass
{
    public function toArray(): array
    {
        $result = [];
        foreach (get_class_vars(static::class) as $key => $value) {
            $result[$key] = $value;
        }

        return $result;
    }

    public function fromArray(array $data): static
    {
        foreach (get_class_vars(static::class) as $key => $value) {
            if (isset($data[$key])) {
                $this->{$key} = $data[$key];
            }
        }

        return $this;
    }
}
