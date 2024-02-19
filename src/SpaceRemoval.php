<?php

namespace SpaceRemoval;

class SpaceRemoval
{
    public static function removeSpaces(string $input): string
    {
        return trim(str_replace(' ', '', $input));
    }
}

