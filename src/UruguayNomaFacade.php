<?php

namespace Abr4xas\UruguayNoma;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Abr4xas\UruguayNoma\UruguayNoma
 */
class UruguayNomaFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'uruguay-noma';
    }
}
