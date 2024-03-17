<?php

namespace Ajellender\Menus\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ajellender\Menus\Menus
 */
class Menus extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ajellender\Menus\Menus::class;
    }
}
