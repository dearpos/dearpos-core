<?php

namespace DearPOS\DearPOSCore\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DearPOS\DearPOSCore\DearPOSCore
 */
class DearPOSCore extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \DearPOS\DearPOSCore\DearPOSCore::class;
    }
}
