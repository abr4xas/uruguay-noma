<?php

namespace ACdev\UruguayNoma\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ACdev\UruguayNoma\UruguayNoma
 */
class UruguayNoma extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ACdev\UruguayNoma\UruguayNoma::class;
    }
}
