<?php

namespace Utils;

use Exceptions\InvalidValueException;
use Exceptions\NotFoundException;

class FormFieldSanitizer
{
    private function __construct()
    {
    }

    public static function get(string $name): string
    {
        if (isset($_POST[$name])) {
            $field = trim(htmlspecialchars($_POST[$name]));
            if (empty($field)) {
                throw new InvalidValueException('Critical error - invalid value.');
            }
            return $field;
        }
        throw new NotFoundException('Critical error - not found field.');
    }
}
