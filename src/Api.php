<?php

declare(strict_types=1);

namespace Yannisobert\OssTd2;

class Api
{
    public function getRandomNumber(): int
    {
        return rand(0, 100);
    }
}