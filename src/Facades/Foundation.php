<?php

namespace Foundation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Foundation\Foundation
 */
class Foundation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Foundation\Foundation::class;
    }
}
